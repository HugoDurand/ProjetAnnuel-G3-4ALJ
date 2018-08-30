package com.esgi.troc;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;


public class DisplaySingleAdsActivity extends AppCompatActivity {
    // TODO: Rename parameter arguments, choose names that match
    // the fragment initialization parameters, e.g. ARG_ITEM_NUMBER

    // TODO: Rename and change types of parameters

    public DisplaySingleAdsActivity() {
        // Required empty public constructor
    }

    // TODO: Rename and change types and number of parameters

    int iduser;
    int idCreator;
    String titre;
    String message;
    String photo;

    @Override
    public void onCreate(@Nullable Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.content_details);

        Bundle b = getIntent().getExtras();
        iduser = 0; // or other values
        idCreator=0;
        if(b != null) {

            iduser = b.getInt("idUser");
            idCreator = b.getInt("idCreator");
            titre = b.getString("titre");
            message = b.getString("message");
            photo = b.getString("photo");

            Log.i("iduser", ""+iduser);
            Log.i("idCreator", ""+idCreator);
            /*Log.i("json api", titre);
            Log.i("json api", message);
            Log.i("json api", photo);*/

            TextView titre = findViewById(R.id.adsTitre);
            TextView desc = findViewById(R.id.adsDescription);
            ImageView photo = findViewById(R.id.adsPhoto);
            TextView creatorUsernameDateCreated = findViewById(R.id.adsCreatedByAtDate);
            TextView creatorEmail = findViewById(R.id.adsCreatorEmail);
            TextView creatorTel = findViewById(R.id.adsCreatorTel);

            titre.setText("Titre: "+b.getString("titre"));
            desc.setText("Description: "+b.getString("message"));

            Button buttonDelete = findViewById(R.id.buttonDelete);
            buttonDelete.setOnClickListener(new View.OnClickListener() {
                public void onClick(View v) {
                    if(iduser==idCreator)
                    {
                        new DoDeleteAd(DisplaySingleAdsActivity.this, idCreator).execute();
                    }
                    else
                    {
                        Toast.makeText(DisplaySingleAdsActivity.this, "Delete not allow for this user", Toast.LENGTH_SHORT).show();
                    }
                }
            });


            new DoGetUser(this,creatorUsernameDateCreated,creatorEmail,creatorTel,idCreator).execute();
        }
    }
}
