package com.esgi.troc;

/**
 * Created by mathy on 27/08/2018.
 */

public class User {
    private int id_user;
    private String username;
    private String email;
    private String password;

    User(int id_user, String username, String email, String password)
    {
        this.id_user = id_user;
        this.username = username;
        this.email = email;
        this.password = password;
    }
    User(String username, String password)
    {
        this.username = username;
        this.password = password;
    }
    public void setIdUser()
    {
        this.id_user = id_user;
    }
    public void setusername()
    {
        this.username = username;
    }
    public void setEmail()
    {
        this.email = email;
    }
    public void setPassword()
    {
        this.password = password;
    }
    public int getIdUser()
    {
        return this.id_user;
    }
    public String getUsername()
    {
        return this.username;
    }
    public String getEmail()
    {
        return this.email;
    }
    public String getPassword()
    {
        return this.password;
    }
}
