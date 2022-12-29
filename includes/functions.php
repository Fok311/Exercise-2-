<?php
function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Exercise_2___Classes__Objects_i', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'zfIy4pGBfg44X1nE' // instruction: change this to your database password
    );
}