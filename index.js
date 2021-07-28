var url = 'https://covid19.th-stat.com/json/covid19v2/getTodayCases.json';
var jsonObject;
request(url, function (error, response, body) {
  if (!error && response.statusCode == 200) {
     jsonObject = JSON.parse(body);
     console.log(jsonObject);
  }
});
