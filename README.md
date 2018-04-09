# joris.me

Source code of my online resume: [https://joris.me](https://joris.me).

If you are interested in its features, read this article: [http://blog.eexit.net/introducing-joris-me](http://blog.eexit.net/2011/11/introducing-joris-me.html).

## Run

    $ npm install -g firebase-tools
    $ firebase serve

## Deploy

	$ firebase deploy

## Builds the assets

    $ brew cask install java
    $ brew install yuicompressor
    $ ./assets/styles/builder && ./assets/scripts/builder

## LaTeX Resume Building

    $ brew cask install basictex
    $ open /usr/local/Caskroom/basictex/*/mactex-basictex-*.pkg
    $ sudo tlmgr update --self
    $ sudo tlmgr install collection-fontsrecommended multirow sectsty datetime fmtcount fontawesome
    $ cd resume
    $ xelatex -halt-on-error -shell-escape Joris_Berthelot_WebAppEngineer_Resume.tex
    $ mv Joris_Berthelot_WebAppEngineer_Resume.pdf ../public
