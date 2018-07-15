package com.esgi.troc;

import android.content.Context;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import java.util.List;

/**
 * Created by mathy on 14/07/2018.
 */

public class MyListAdapter extends ArrayAdapter<Ads>
{
    private int layout;
    private List<Ads> mObjects;

    public MyListAdapter(Context context, int resource, List<Ads> ads)
    {
        super(context, resource, ads);
        mObjects = ads;
        layout = resource;
    }

    @Override
    public View getView(final int position, View convertView, ViewGroup parent)
    {
        ViewHolder mainViewHolder = null;
        if(convertView == null)
        {
            LayoutInflater inflater = LayoutInflater.from(getContext());
            convertView = inflater.inflate(layout, parent, false);
            ViewHolder viewHolder = new ViewHolder();
            viewHolder.current_id_ads = (TextView) convertView.findViewById(R.id.id_ads);
            viewHolder.current_ads_creator = (TextView) convertView.findViewById(R.id.ads_creator);
            viewHolder.current_ads_title = (TextView) convertView.findViewById(R.id.ads_title);
            viewHolder.button = (Button) convertView.findViewById(R.id.viewThisAdd);
            convertView.setTag(viewHolder);
        }
        mainViewHolder = (ViewHolder) convertView.getTag();
        mainViewHolder.button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getContext(), "Button was clicked for list item " + position, Toast.LENGTH_SHORT).show();
            }
        });
        Log.i("json api", "etape 7 "+ mObjects.get(position) + " || "+ mObjects.get(position).getIdAnnonce());
        mainViewHolder.current_id_ads.setText(""+mObjects.get(position).getIdAnnonce());
        Log.i("json api", "etape 8 "+ mObjects.get(position) + " || "+ mObjects.get(position).getIdCreator());
        mainViewHolder.current_ads_creator.setText(""+mObjects.get(position).getIdCreator());
        Log.i("json api", "etape 9 "+ mObjects.get(position) + " || "+ mObjects.get(position).getTitre());
        mainViewHolder.current_ads_title.setText(""+mObjects.get(position).getTitre());

        return convertView;
    }
}
