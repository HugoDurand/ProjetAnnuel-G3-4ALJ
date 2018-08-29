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
import android.widget.TextView;

import org.json.JSONObject;

import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;

/**
 * Created by mathy on 25/08/2018.
 */

public class AjouterAdsActivity extends AppCompatActivity {
    Button btnAddAds;
    String API = "http://10.0.2.2:8000/";

    @Override
    public void onCreate(@Nullable Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.ajouter_ads_activity);
        btnAddAds=findViewById(R.id.buttonAddAds);
        btnAddAds.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}

                boolean postAds=postAds("titre1","description1","photoUrl1");



                Intent resultIntent = new Intent();
                setResult(RESULT_OK, resultIntent);
                finish();
            }
        });

    }
    public boolean postAds (String titre, String description, String photo)
    {
        try {
            URL url = new URL(API + "api/annonce");
            HttpURLConnection co = (HttpURLConnection) url.openConnection();
            co.setRequestProperty("Content-Type", "application/json");
            co.setRequestProperty("Accept", "application/json");
            co.setDoOutput(true);
            co.setRequestMethod("POST");

            JSONObject cred = new JSONObject();
            cred.put("titre", titre);
            cred.put("description", description);
            cred.put("photo", photo);
            OutputStreamWriter wr = new OutputStreamWriter(co.getOutputStream());
            wr.write(cred.toString());
            wr.flush();

            int HttpResult = co.getResponseCode();
            if (HttpResult == HttpURLConnection.HTTP_OK)
            {
                return true;
            }
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
        return false;
    }
}
