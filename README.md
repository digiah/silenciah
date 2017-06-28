# silenciah
Archive of Silences

Archive of Silence site: http://dahi.manoa.hawaii.edu/silence/index.html

all the ir files mentioned below are in the same dir structure (/ir/...) mentioned below.  If you want to git clone the repo into your dahi git directory after vncing in, that might be simpler.  You will need to adjust the paths though, including in santalucia.conf.

vnc to dahi

open a terminal 

change dir to ~/tmp/ir

$ cd ~/tmp/ir

list (you can skip this step..it is for information:

$ ls

this will give you the following folders:

"config-files" give the instructions of how to apply the IR and are text.  I adjusted santalucia.conf to work here.  look at the conf file to see.

"input" is the input file to be convoluted. must be stereo uncompressed wav file.  You can user other uncompressed channel configs up to 64 channels and down to mono but you have to change the conf file (see help)

"output" is where the result is stored.  wav files.

"reverbs" is where the impulse responses are.  these are all wav files.

"help" conatains three READMEs.  THis file is README.1ST.  README.CONFIG gives usage instructions for how to work with the conf files.

THe command you will work with is fconvolver.  It is the version that convolves files and is not real time.  It has a streaming version, jconvolver that works with live audio in real time.  

change dir to config-files/demo-reverbs

$ cd ~/tmp/ir/config-files/demo-reverbs

run fconvolver as follows (all one line): 

$ fconvolver santalucia.conf ../../input/voicenorm.wav ~/tmp/ir/output/test1.wav

you can change the input and output files to anything you like as long as you upload the named input file to the input folder and it is in uncompressed wav format.  For now, everything is in Santalucia chapel though :).  Big files might take some time to grind through.  This is also 100% wet.  Usually you would mix the original signal with the convoluted one about 50/50 to tone the effect down a little and make it more realistic.  


After running fconvolver, download ~/tmp/ir/input/beat.wav and ~/tmp/ir/output/test1.wav and compare.  Feel free to put up other test files and make other output files, just try to keep things in the right folders.


If you have audacity or some other multitrack editor, load dry and wet both at once and mix for maximum realisiticity :)

We can use ecasound to mix wet and dry, which I also installed ("man ecasound" in term for intro, see http://ecasound.seul.org/ecasound/Documentation/ for more.  It should be simple to mix the two files.  If we cannot do it with ecasound we can use sox (man sox) which is also installed. 


Once you get the hang of the files and fconcolv, the next task is to develop php or javascript or whatever it is you do to make it run from the web site.  lets start by writing something that runs the files that are known to work.  output file should be accessible to the browser.  It would not hurt to make the impulse responses available to the browser too, but not required.  

USE this repo for the code.

