package com.esgi.troc;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import org.json.JSONObject;

import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;

/**
 * Created by mathy on 25/08/2018.
 */

public class AjouterAdsActivity extends AppCompatActivity {
    Button btnAddAds;
    EditText titre;
    EditText description;
    EditText photoUrl;
    int iduser;

    String API = "http://10.0.2.2:8000/";

    @Override
    public void onCreate(@Nullable Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.ajouter_ads_activity);

        Bundle b = getIntent().getExtras();
        iduser = 0; // or other values
        if(b != null)
        {
            iduser = b.getInt("idUser");
        }

        //iduser=savedInstanceState.getInt("idUser");

        btnAddAds = findViewById(R.id.buttonAddAds);
        titre = findViewById(R.id.editTextTitre);
        description = findViewById(R.id.editTextDescription);
        photoUrl = findViewById(R.id.editTextPhotoUrl);
        btnAddAds.setOnClickListener(new View.OnClickListener()
        {
            public void onClick(View v)
            {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
                if(iduser!=0)
                {
                    new DoPostAd(AjouterAdsActivity.this, titre.getText().toString(), description.getText().toString(), photoUrl.getText().toString(), iduser).execute();
                }
                else
                {
                    Toast.makeText(AjouterAdsActivity.this, "Add not allow while not logged", Toast.LENGTH_SHORT).show();
                }
            }
        });

    }
}
