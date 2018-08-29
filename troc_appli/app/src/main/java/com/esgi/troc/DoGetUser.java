package com.esgi.troc;

import android.content.Context;
import android.os.AsyncTask;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;

/**
 * Created by mathy on 29/08/2018.
 */

public class DoGetUser  extends AsyncTask<Void, Void, ArrayList<Ads>> {
    @Override
    protected ArrayList<Ads> doInBackground(Void... voids) {
        return null;
    }
}
