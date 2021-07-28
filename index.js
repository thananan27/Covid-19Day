const https = require('https');

let url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";

https.get(url,(res) => {
    let body = "";

    res.on("data", (chunk) => {
        body += chunk;
    });

    res.on("end", () => {
        try {
            let json = JSON.parse(body);
            // do something with JSON
        } catch (error) {
            console.error(error.message);
        };
    });

}).on("error", (error) => {
    console.error(error.message);
});
