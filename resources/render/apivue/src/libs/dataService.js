import languageProvider from "@/libs/languageProvider";
import dataProvider from "@/libs/dataProvider";

export default {

    data:'',
    currentPage:'home',
    pages:{
          cv:{path:'cv',data:'',fn:dataProvider.getCVData.bind(dataProvider)},
          home:{path:'home',data:'',fn:dataProvider.getHomeData.bind(dataProvider)}
    },

    addPage(name,path,func){
        this.pages[name]={path:path,data:'',fn:func}
    },
    switchPage(page){
        this.currentPage = page;
    },

    getData(){
      //console.log(this.pages[this.currentPage].path);
      return this.pages[this.currentPage].fn(languageProvider.getLanguageCode());
    }



}
