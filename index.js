const fetch = require('node-fetch');

let url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";

let settings = { method: "Get" };

fetch(url, settings)
    .then(res => res.json())
    .then((json) => {
        // do something with JSON
    });
