
export default {
    url : 'http://localhost:8888',

    getSimpleData:async function (){
        return await fetch(this.url+'/simpldata/').then((ret)=>{return ret.json();});
    },
    getCVData: async function(lang = 'ru'){
        let ret = await (await fetch(this.url + '/cv/' + lang)).json();


        return ret;

    }
}