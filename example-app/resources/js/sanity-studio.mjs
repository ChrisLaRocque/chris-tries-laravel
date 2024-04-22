import { defineConfig, renderStudio } from "sanity";
import { structureTool } from "sanity/structure";
// console.log("sanity studio loaded");
const config = defineConfig({
    plugins: [structureTool({})],
    projectId: "dfkifqxc",
    dataset: "production",
    schema: {
        types: [
            {
                type: "document",
                name: "post",
                title: "Post",
                fields: [
                    {
                        type: "string",
                        name: "title",
                        title: "Title",
                    },
                ],
            },
        ],
    },
});
renderStudio(document.getElementById("app"), config);
