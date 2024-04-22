<html>
  <head>
    <style>
      html {
        -webkit-text-size-adjust: 100%;
        text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent;
        -webkit-font-smoothing: antialiased;
      }
      html,
      body,
      #app {
        height: 100%;
        margin: 0;
        overflow: hidden;
      }
    </style>
    <!-- <script src="{{ asset('js/app.js') }}" ></script> -->

  </head>
  <body>
    <div id="app"></div> 
    <script type="module">
     import { defineConfig, renderStudio } from "https://esm.sh/sanity"
      import { structureTool } from "https://esm.sh/sanity/structure"


const config = defineConfig({
    plugins: [structureTool({})],
    projectId: "dfkifqxc",
    dataset: "production",
    basePath:'/studio',
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
    </script>
  </body>
</html>