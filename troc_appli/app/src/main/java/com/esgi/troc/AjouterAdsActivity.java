package com.esgi.troc;

import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

/**
 * Created by mathy on 25/08/2018.
 */

public class AjouterAdsActivity extends AppCompatActivity {
    Button btnAddAds;

    @Override
    public void onCreate(@Nullable Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.ajouter_ads_activity);
        btnAddAds=findViewById(R.id.buttonAddAds);
        btnAddAds.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
            }
        });

    }
}
