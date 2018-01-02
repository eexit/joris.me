# joris.me

Source code of my online resume: [http://joris.me](http://joris.me).

If you are interested in its features, read this article: [http://blog.eexit.net/2011/11/introducing-joris-me.html](http://blog.eexit.net/2011/11/introducing-joris-me.html).

## Web Resume Building

    $ brew cask install java
    $ brew install yuicompressor
    $ cd bin
    $ ./css-aggregator

### Run

    $ php -S localhost:8080 -d .

## LaTeX Resume Building

    $ brew cask install basictex
    $ open /usr/local/Caskroom/basictex/*/mactex-basictex-*.pkg
    $ sudo tlmgr update --self && tlmgr install collection-fontsrecommended multirow sectsty datetime fmtcount fontawesome
    $ cd resume
    $ xelatex -halt-on-error -shell-escape Joris_Berthelot_WebAppEngineer_Resume.tex
