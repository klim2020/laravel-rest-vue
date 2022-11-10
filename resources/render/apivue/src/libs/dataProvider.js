
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

    sendContactRequest(data){
        data.user__name = '';//adds a field for checking
        fetch(this.url+"/api/sendcontactdata/", {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(data)
        }).then(res => {
            console.log("Request complete! response:", res);
        });
        return data;
    },


    async getErrors(lang = 'ru') {

        let ret =  await (await fetch(this.url + '/api/getErrors/' + lang)).json();

        return await ret;
    }
}
