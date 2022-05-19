
export default {
    //Server deployment
    //url : location.origin,
    update:null,
    //Github depl
    url: 'https://my-portfolio2022-klim.herokuapp.com',
    setUpdateProc(callback) {
        this.update = callback;
    },
    refresh(lang = 'ru'){
      return this.update(lang);
    },
    getSimpleData:async function (){
        return await fetch(this.url+'/simpldata/').then((ret)=>{return ret.json();});
    },
    getContacts: async function(lang = 'ru'){
        //console.log(this.url + '/getcontacts/' + lang);
        let ret = await (await fetch(this.url + '/getcontacts/' + lang)).json();
        return await ret;
    },


    getHomeData: async function(lang = 'ru'){
       // console.log(this.url + '/home/' + lang);

        let ret = await (await fetch(this.url + '/home/' + lang)).json();
        return await ret;

    },

    getCVData: async function(lang = 'ru'){
       // console.log(this.url + '/cv/' + lang);
        let ret = await (await fetch(this.url + '/cv/' + lang)).json();
        return await ret;
    },

    sendContactRequest(form){
        return form;
    },



}
