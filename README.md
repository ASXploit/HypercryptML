# HypercryptML
HML is an automatic Html Obfuscation script and still a work in progress.

# What does it do?
HypercryptML or HML Script reads a specified pages Html code and Obfuscates it by converting the code into a string then converting the string into Hexadecimal.. After it is converted it is placed in between Script tags in Javascript allowing javascript to handle the code.

# How is HML Better than any other Html Encryptor?
HML is not an Html Encryptor.. It is an Obfuscation script.. Why is it better? Other tools require you to keep a non obfuscated version of your Html so you can update it and go back to there page for a re-obfuscation.. Which seems like a great hassle for something so simple..

Unlike other Html Obfuscation tools.. HML Makes NO Hard Edits to your html file.. Meaning? the obfuscation is sort of Temporary.. it only appears to be obfuscated to the user.. It also means when you update your Html file you wont need to make any changes to the php script nor will you need to go somewhere for a re-obfuscation ! Less of a hassle , easy to use  , all around Easy !

# What is the downside of using HML?
The only downside i can think of ... Is the fact you have no control over what part of the code gets obfuscated.. Which i should add i would not have any internal Javascript,PHP,CSS inside of your Html file , please keep them External to avoid any bugs.

# How can i use it?
Well now that ive used a 3rd party library.. You would need to download both of the php files uploaded here.. and put them on your website.. Then you would need to update the $target_file variable as well as the $target_dir and point them to the correct file and directory.. if there is no directory and the file is in the same folder just leave the $target_dir string blank.. Once you have updated the variables when you visit the HypercryptML.php page it will display the page you pointed it too but with an obfuscated code!

# New Code?
As of 11/25/16 HML has been refactored into a more organized code , it now uses Classes, Getters, Setters.. And has pretty much helped me learn quite a few new things about Php ! I Will continue my learnings of Php and will try to create a better obfuscator/update to this obfuscator.. In my opinion this obfuscation isnt as good as i want it to be... It simply converts the html code to hex and throws in some javascript and bam obfuscated.. Not very impressed with this.. Although i was happy that i had accomplished the goal of bringing this project to completion ... I'm still not very happy with the actual obfuscation ! So... i will be trying to create a better obfuscation !

# TODO:
 - Create Advanced Html Obfuscation Algorithm
 - Add CSS to JS Obfusction Support
