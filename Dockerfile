FROM mhart/alpine-node:9
WORKDIR /app
COPY . .
RUN apk add --update --no-cache make gcc g++ python && \
    npm install --production --loglevel error && \
    apk del make gcc g++ python
EXPOSE 8080
CMD ["npm", "start"]
