package com.esgi.troc;

import android.net.Uri;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;


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
        if(b != null)
        {
            iduser = b.getInt("idUser");

            int idCreator = b.getInt("idCreator");
            titre = b.getString("titre");
            message = b.getString("message");
            photo = b.getString("photo");

            TextView titre = findViewById(R.id.adsTitre);
            TextView desc = findViewById(R.id.adsDescription);
            ImageView photo = findViewById(R.id.adsPhoto);
            TextView creatorUsernameDateCreated = findViewById(R.id.adsCreatedByAtDate);
            TextView creatorEmail = findViewById(R.id.adsCreatorEmail);
            TextView creatorTel= findViewById(R.id.adsCreatorTel);

            titre.setText(b.getString("titre"));
            desc.setText(b.getString("message"));
        }
    }
}
