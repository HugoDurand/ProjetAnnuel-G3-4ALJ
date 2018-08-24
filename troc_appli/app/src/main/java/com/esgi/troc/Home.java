package com.esgi.troc;

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
    private Button but1;
    public static final String LIFE_CYCLE_FRAGMENT = "LIFE_CYCLE_ACTIVITY";
    final String API = "http://10.0.2.2:8000/";
    // 10.0.2.2 permet a l'appli android(quand elle est simulé sur emutateur uniquement)
    // de rediriger vers le localhost du pc(là ou se trouve l'API) plutot que le localhost de la machine virtuel

    @Override
    public void onCreate(@Nullable Bundle savedInstance)
    {
        super.onCreate(savedInstance);
        setContentView(R.layout.ads_activity);
        but1 = (Button)findViewById(R.id.loginButton);
        but1.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View v)
            {
                openActivityLogin();
            }
        });
        ListView lv = findViewById(R.id.listview);
        new DoGetAds(this,lv,1).execute();

        Log.i(LIFE_CYCLE_FRAGMENT,"onCreate");
    }

    public void openActivityLogin()
    {
        Intent toy = new Intent(this,LoginRegisterActivity.class);
        startActivity(toy);
    }
}
