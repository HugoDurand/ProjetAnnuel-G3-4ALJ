package com.esgi.troc;

import android.app.Activity;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.annotation.Nullable;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.concurrent.ExecutionException;

public class Home extends AppCompatActivity
{
    private Button buttonLoginActivity;
    private Button buttonCreateAds;

    ListView lv;

    private int idUser;
    public int i;

    public static final String LIFE_CYCLE_FRAGMENT = "LIFE_CYCLE_ACTIVITY";
    final String API = "http://10.0.2.2:8000/";
    // 10.0.2.2 permet a l'appli android(quand elle est simulé sur emutateur uniquement)
    // de rediriger vers le localhost du pc(là ou se trouve l'API) plutot que le localhost de la machine virtuel

    @Override
    public void onCreate(@Nullable Bundle savedInstance)
    {
        super.onCreate(savedInstance);
        setContentView(R.layout.ads_activity);
        buttonLoginActivity = (Button)findViewById(R.id.loginButton);
        buttonLoginActivity.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View v)
            {
                openActivityLogin();
            }
        });
        buttonCreateAds = (Button)findViewById(R.id.addNewAds);
        buttonCreateAds.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View v)
            {
                openActivityAjouterAds();
            }
        });
        idUser=0;
        lv = findViewById(R.id.listview);
        new DoGetAds(this,lv,1).execute();

        Log.i(LIFE_CYCLE_FRAGMENT,"onCreate");
    }

    public void openActivityLogin()
    {
        Intent toy = new Intent(this,LoginRegisterActivity.class);
        i=2;
        startActivityForResult(toy, i);
    }

    public void openActivityAjouterAds()
    {
        Intent toy = new Intent(this,AjouterAdsActivity.class);
        toy.putExtra("idUser",idUser);
        i=1;
        startActivityForResult(toy, i);
    }

    public void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        if (requestCode == 1) { //AjouterAdsActivity
            if(resultCode == 201) { //Ajout
                Toast.makeText(this, "An ads has been added", Toast.LENGTH_SHORT).show();
                new DoGetAds(this,lv,1).execute();
            }
        }
        if (requestCode == 2) { //LoginRegisterActivity
            if(resultCode == 3) { //Login
                idUser=data.getIntExtra("iduser",0);
                Toast.makeText(this, "Logged in", Toast.LENGTH_SHORT).show();
            }
            if(resultCode == 2) { //Register
                Toast.makeText(this, "Registered", Toast.LENGTH_SHORT).show();
            }
        }
    }
}
