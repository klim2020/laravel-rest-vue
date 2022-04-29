
export default {
    //Server deployment
    //url : location.origin,

    //Github depl
    url: 'https://my-portfolio2022-klim.herokuapp.com',

    getSimpleData:async function (){
        return await fetch(this.url+'/simpldata/').then((ret)=>{return ret.json();});
    },
    getCVData: async function(lang = 'ru'){
        let ret = await (await fetch(this.url + '/cv/' + lang)).json();


        return ret;

    }
}
