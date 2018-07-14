package com.esgi.troc;

import android.os.AsyncTask;
import android.support.annotation.Nullable;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.concurrent.ExecutionException;

public class Home extends AppCompatActivity
{

    public static final String LIFE_CYCLE_FRAGMENT = "LIFE_CYCLE_ACTIVITY";
    final String API = "http://10.0.2.2:8000/";
    // 10.0.2.2 permet a l'appli android(quand elle est similé sur emutateur uniquement)
    // de rediriger vers le localhost du pc(là ou se trouve l'API) plutot que le siens

    private ArrayList<Ads> arrayAds = new ArrayList<Ads>();

    @Override
    public void onCreate(@Nullable Bundle savedInstance)
    {
        super.onCreate(savedInstance);
        setContentView(R.layout.ads_activity);
        //generateListContent();
        ListView lv = findViewById(R.id.listview);
        new DoGetAds(this,lv,1).execute();


        /*lv.setAdapter(new MyListAdapter(this, R.layout.list_ads,arrayAds));
        lv.setOnItemClickListener(new AdapterView.OnItemClickListener()
        {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id)
            {
                Toast.makeText(Home.this, "List item was clicked at " + position, Toast.LENGTH_SHORT).show();
            }
        });*/
        Log.i(LIFE_CYCLE_FRAGMENT,"onCreate");
    }



    private void generateListContent()
    {
        /*for(int i=0;i<5;i++)
        {
            data.add("this is row number "+i);
        }*/
    }
}
