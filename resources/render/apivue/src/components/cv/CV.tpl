<TheSpinner v-if="showed"></TheSpinner>
<div v-if="cvdata2" class="flex flex-row flex-wrap justify-center bg-green-100" ref="document">

    <div ref="document" id="topheader" class="z-0 relative bg-sky-900 flex flex-wrap flex-basis border-b-4 border-yellow-600">

        <div id="header_stripe" class = "bg-gradient-to-r from-sky-700 to-sky-800
                                            absolute
                                            w-95/100
                                            top-8
                                            right-0
                                            h-24

                                            rounded-tl-lg
                                            rounded-bl-lg
                                            flex
                                            flex-col
                                            justify-center
                                            items-center
                                             " style="z-index:-1" >

            <div class="relative self-center justify-self-start">
                <h1 class="p-2 tracking-widest text-yellow-500  font-mono italic text-3xl font-extrabold truncate" >
                    {{ cvdata2.name[0] }}</h1>
            </div>
            <div class="relative self-center justify-self-end">
                <h3 class="p-2 bg-opacity-5 tracking-widest text-yellow-300  italic  font-sans  text-lg font-bold truncate ">
                    {{ cvdata2.job_title[0] }}</h3>
            </div>
            <div style="margin: 0px 40px;right:10px" class = "float-right shadow absolute" data-html2canvas-ignore="true">
                <button @click="exportToPDF" class="bg-sky-700 hover:bg-sky-500 text-white font-bold py-2 px-4 border border-sky-700 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" text-yellow-200 h-6 w-6 float-left" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <p class="text-yellow-200 float-left">{{ cvdata2.download_PDF[0] }}</p>
                </button>
            </div>
        </div>

            <div class = "flex-basis-left">
               <div class = "box-content p-4">
                    <img class ="rounded-full border-4 border-yellow-500 w-48 h-48 mx-auto" src = "../../assets/foto_logo.jpg" />
               </div>
            </div>
        <div id = "header_contacts" style="margin-bottom:5px;" class = "self-end  p-4
                                                rounded-tl-lg
                                                rounded-bl-lg
                                                bg-gradient-to-r from-sky-700 to-sky-800
                                                flex-basis-right">
                <h2 class = "relative top-4 float-left text-lg font-bold italic text-yellow-100"> {{ cvdata2.contacts_text[0] }}:</h2>
                <ul class="float-left social-icons font-sans font-bold text-yellow-200">
                    <li v-for="contact in cvdata2.contacts[0]"> <a :href="contact.link" class="social-icon" v-html="contact.text"></a></li>
                </ul>


            </div>
    </div>
    <div id="content"  class = "bg-yellow-100 flex flex-basis">
        <div class=" flex-basis-left bg-sky-900 b-blacked flex flex-wrap">
            <div class="text-block ">
                <h2>{{ cvdata2.about_text[0] }}</h2>
                <p class="font-mono">{{ cvdata2.about[0] }}</p>
            </div>

            <div class="text-block ">
                <h2>{{ cvdata2.skills_text[0] }}</h2>

                <div class = "flex dashed_underline" v-for="skill in cvdata2.skills[0]">
                    <p class="font-mono float-left flex-basis-50">{{ skill.name }}</p>
                    <ProgressBar :percent="skill.percent" class="float-right flex-basis-50 self-center"></ProgressBar>
                </div>
            </div>

            <div class="text-block ">
                <h2>{{ cvdata2.contacts_text[0] }}</h2>

                <div style="justify-content: space-around;align-items: center;" class = "flex dashed_underline" v-for="contact in cvdata2.contacts[0]">
                    <p class="font-mono float-left flex-basis-50">{{ contact.name }}:</p>
                    <a :href="contact.link">link</a>
                </div>

            </div>
        </div>
        <div class="flex-basis-right bg-white forheader" style="height: 100%">

            <div class = "text_block">
                <div class="headtext">
                    <h2>{{ cvdata2.education_text[0] }}</h2>
                </div>
                <ul>
                    <li v-for="(item,index) in cvdata2.education[0]" v-html = "item"> </li>
                </ul>
            </div>

            <div class = "text_block">
                <div class="headtext">
                    <h2>{{ cvdata2.work_experience_text[0] }}</h2>
                </div>
                <ul>
                    <li v-for="(item,index) in cvdata2.work_experience[0]" v-html = "item"> </li>
                </ul>
            </div>


        </div>
    </div>
</div>

