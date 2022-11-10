/* eslint-disable no-console */
import {execa} from "execa";
import fs from 'fs';
//const execa = require('execa');
//const fs = require('fs');

(async () => {
    try {
        try{
        await execa("git", ["checkout", "-f", "master"]);
        await execa("git", ["branch", "-D", "gh-pages"]);
        }
        finally {


            await execa("git", ["checkout", "--orphan", "gh-pages"]);
            // eslint-disable-next-line no-console
            console.log("Building started..."+folderName);
            await execa("npm", ["run", "build"]);

            // Understand if it's dist or build folder
            const folderName = fs.existsSync("dist") ? "dist" : "build";
            await execa("cp", ["src/assets/cname/CNAME", folderName]);
            await execa("git", ["--work-tree", folderName, "add", "--all"]);
            await execa("git", ["--work-tree", folderName, "commit", "-m", "gh-pages"]);

            console.log("Pushing to gh-pages...");
            await execa("git", ["push", "welcome_page", "HEAD:gh-pages", "--force"]);
            await execa("rm", ["-r", folderName]);
            await execa("git", ["checkout", "-f", "master"]);
            await execa("git", ["branch", "-D", "gh-pages"]);

            console.log("Successfully deployed, check your settings");
        }
    } catch (e) {
        // eslint-disable-next-line no-console
        console.log(e.message);
        process.exit(1);
    }
})();

