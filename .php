<?php
def replace_vowels(string):
    """Заменяет все гласные буквы в строке на символ "*"""
    vowels = "aeiouAEIOU"
    for i in range(len(string)):
        if string[i] in vowels:
            string[i] = "*"
?>