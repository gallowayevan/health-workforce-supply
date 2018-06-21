 <template>
        <button type="button" class="save-image" id="save-image" @click="downloadImage">Download as Image</button>
 </template>

 <script>
import { saveSvgAsPng } from "save-svg-as-png";
import { wrap } from "../utility";
import { svg } from "d3-fetch";

export default {
  name: "DownloadImageButton",
  data() {
    return {};
  },
  props: [],
  methods: {
    downloadImage() {
      const dashboard = document.querySelector(".dashboard").cloneNode(true);
      dashboard.setAttribute("viewBox", "0 0 1050 810");

      const map = dashboard.querySelector("#map-container");
      map.setAttribute("transform", "translate(25,25)");

      const barcharts = dashboard.querySelector("#bar-chart-group");
      barcharts.setAttribute("transform", "translate(750,115)");
      barcharts.setAttribute("font-size", "1em");

      const newText = document.createElementNS(
        "http://www.w3.org/2000/svg",
        "text"
      );
      newText.setAttributeNS(null, "font-size", "10px");
      newText.setAttributeNS(null, "transform", "translate(200,660)");

      const notes = document.querySelector(".notes-text").innerText;
      newText.innerHTML = wrap({text: notes, maxCharsPerLine: 180})
      dashboard.appendChild(newText);

      svg('ShepsLogoVertical.svg')
      .then(function(d){
        const logoSvg = d.childNodes[0];
        logoSvg.setAttribute("transform", "translate(15,640)");
        dashboard.appendChild(logoSvg);
        saveSvgAsPng(dashboard, "viz.png", { backgroundColor: "#fff" });
      })
      .catch(function(error) {
  console.log('Looks like there was a problem: \n', error);
});

           
    }
  }
};
</script>

<style >
</style>
 
