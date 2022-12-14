<?php

// Single quote
echo 'Nama : ';
echo 'Fadhil Muhammad';
echo '\n';

// Double quote
echo "\n";
echo "Nama : ";
echo "Fadhil\t Muhammad\t \n";

// multiline string
// heredoc
echo <<<HEREDOC
saya sedang belajar bahasa pemrograman php
ini merupakan bagian dari tipe data string
teks ini pun ditulis menggunakan fitur heredoc
yang mana berfungsi untuk menulis teks panjang
tanpa perlu menuliskan karatker "\\n" lagi
HEREDOC;

echo <<<'NOWDOC'
teks ini ditulis menggunakan nowdoc
hampir sama dengan heredoc 
namun yang membedakan adalah kemampuan parsingnya
untuk nowdoc ia tidak bisa melakukan parsing dan juga escape sequence
berbeda dengan heredoc yang mempunyai kemampuan parsing dan juga escape sequance "\n"
simpelnya nowdoc tidak jauh beda dengan single quote ' '
dan heredoc sama seperti halnya double quote 
NOWDOC;


