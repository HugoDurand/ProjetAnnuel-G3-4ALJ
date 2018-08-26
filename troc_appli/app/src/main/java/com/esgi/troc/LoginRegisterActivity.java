package com.esgi.troc;

import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;

public class LoginRegisterActivity extends AppCompatActivity {


    public void clicked()
    {
        showSecondFragment();
    }

    LoginFragment mLoginFragment;
    SecondFragment mSecondFragment;
    TextView tvFirst = null;
    TextView tvSecond = null;
    Boolean tvFirstIsCheck=true;


    @Override
    public void onCreate(@Nullable Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        initFragment();
        TextView tvFirst= findViewById(R.id.buttonLogin);
        TextView tvSecond= findViewById(R.id.buttonRegister);

        tvFirst.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
                showFirstFragment();
                tvFirstIsCheck=true;
            }
        });

        tvSecond.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                //DO SOMETHING! {RUN SOME FUNCTION ... DO CHECKS... ETC}
                showSecondFragment();
                tvFirstIsCheck=false;
            }
        });
    }

    public void initFragment()
    {
        mLoginFragment = new LoginFragment();
        getSupportFragmentManager().beginTransaction().add(R.id.main_layout, mLoginFragment).commit();
        tvFirstIsCheck=true;

        mSecondFragment = new SecondFragment();
    }

    public void showFirstFragment()
    {
        Log.i("LoginRegisterActivity","show first?"+tvFirstIsCheck.toString());
        if(!tvFirstIsCheck)
        {
            Log.i("LoginRegisterActivity","do show first");
            tvFirstIsCheck=true;
            super.onBackPressed();
            Log.i("LoginRegisterActivity","done show first");
        }
    }

    public void showSecondFragment()
    {
        Log.i("LoginRegisterActivity","show second?"+tvFirstIsCheck.toString());
        if(tvFirstIsCheck)
        {
            Log.i("LoginRegisterActivity","do show second");
            getSupportFragmentManager().beginTransaction().replace(R.id.main_layout, mSecondFragment).addToBackStack(null).commit();
            tvFirstIsCheck=false;
            Log.i("LoginRegisterActivity","done show first");
        }
    }

    @Override
    public void onBackPressed()
    {
        if(!tvFirstIsCheck)
        {
            tvFirstIsCheck=true;
        }
        super.onBackPressed();
    }
}
