# joris.me

Source code of my online resume: [http://joris.me](http://joris.me).

If you are interested in its features, read this article: [http://blog.eexit.net/introducing-joris-me](http://blog.eexit.net/2011/11/introducing-joris-me.html).

## Run

    $ docker-compose up dev

Go to [http://localhost:8080](http://localhost:8080).

### Production

Before deploying, you need to build the PDF version of the resume and leave it into the directory with appropriate name (referenced in `index.html`).
Ensure you have a [nginx-proxy](https://github.com/jwilder/nginx-proxy) running first, then:

    $ docker-compose up -d prod

### Builds the assets

    $ brew cask install java
    $ brew install yuicompressor
    $ cd bin
    $ ./css-aggregator
    $ ./js-aggregator

### LaTeX Resume Building

    $ brew cask install basictex
    $ open /usr/local/Caskroom/basictex/*/mactex-basictex-*.pkg
    $ sudo tlmgr update --self && tlmgr install collection-fontsrecommended multirow sectsty datetime fmtcount fontawesome
    $ cd resume
    $ xelatex -halt-on-error -shell-escape Joris_Berthelot_WebAppEngineer_Resume.tex
