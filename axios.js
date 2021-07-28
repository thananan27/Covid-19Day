const getBtn = document.getElementById('get-data');
const getconfirmed = document.getElementById('confirmed');
const getrecover = document.getElementById('recover');
const getdeaths = document.getElementById('deaths');
const getupdatedate = document.getElementById('updatedate');
const getdata = () => { axios.get('https://covid19.th-stat.com/json/covid19v2/getTodayCases.json').then(response => {
   console.log(response);
   getconfirmed.innerHTML = response.data.NewConfirmed;
   getrecover.innerHTML = response.data.NewRecovered;
   getdeaths.innerHTML = response.data.NewDeaths;
   getupdatedate.innerHTML = response.data.UpdateDate;
});
};
getBtn.addEventListener('click', getdata);
