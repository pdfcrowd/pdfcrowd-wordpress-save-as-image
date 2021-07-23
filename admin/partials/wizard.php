<div id="save-as-image-pdfcrowd-wizard">
    <h2></h2>
    <h2>
        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K" style="height: 24px;"/>
        <?php echo esc_html( get_admin_page_title() ); ?> Wizard
    </h2>
    <div id="save-as-image-pdfcrowd-wizard-step-1" class="save-as-image-pdfcrowd-wizard-step">
        <h2>Conversion Format</h2>
        <div class="save-as-image-pdfcrowd-wizard-step-container">
            <p>
                <span class="save-as-image-pdfcrowd-wizard-step-title">
                    <label for="save-as-image-pdfcrowd-output_format">
                        Choose the output format
                    </label>
                </span>
                <span id="save-as-image-pdfcrowd-wizard-output_format" class="save-as-image-pdfcrowd-wizard-step-span">
                </span>
            </p>
        </div>
    </div>
    <div id="save-as-image-pdfcrowd-wizard-step-2" class="save-as-image-pdfcrowd-wizard-step">
        <h2>Image Output</h2>
        <div class="save-as-image-pdfcrowd-wizard-step-container">
            <p>
                <span class="save-as-image-pdfcrowd-wizard-step-title">
                    <label for="save-as-image-pdfcrowd-screenshot_width">
                        Choose the output image width
                    </label>
                </span>
                <p id="save-as-image-pdfcrowd-wizard-screenshot_width" class="save-as-image-pdfcrowd-wizard-step-p">
                </p>
            </p>
        </div>
    </div>
    <div id="save-as-image-pdfcrowd-wizard-step-3" class="save-as-image-pdfcrowd-wizard-step">
        <h2>Appearance</h2>
        <div class="save-as-image-pdfcrowd-wizard-step-container">
            <p>
                <span class="save-as-image-pdfcrowd-wizard-step-title">
                    <label for="save-as-image-pdfcrowd-button-text">
                        Conversion button label
                    </label>
                </span>
                <p id="save-as-image-pdfcrowd-wizard-button-text" class="save-as-image-pdfcrowd-wizard-step-p">
                </p>
            </p>
        </div>
    </div>
    <div id="save-as-image-pdfcrowd-wizard-step-4" class="save-as-image-pdfcrowd-wizard-step">
        <h2>Conversion Mode</h2>
        <div class="save-as-image-pdfcrowd-wizard-step-container">
            Select option which describes your pages used for conversion. This will help you set the optimal mode.
            <div id="save-as-image-pdfcrowd-wizard-cm-conf">
                <p>
                    <label for="save-as-image-pdfcrowd-wizard-cm-public">
                        <input type="radio"
                               id="save-as-image-pdfcrowd-wizard-cm-public"
                               name="save-as-image-pdfcrowd-wizard-cm"
                               value="public"
                               checked="checked"
                               autocomplete="off">
                        Publicly accessible pages
                    </label>
                </p>
                <p>
                    <label for="save-as-image-pdfcrowd-wizard-cm-private">
                        <input type="radio"
                               id="save-as-image-pdfcrowd-wizard-cm-private"
                               name="save-as-image-pdfcrowd-wizard-cm"
                               value="private"
                               autocomplete="off">
                        Intranet or localhost pages
                    </label>
                </p>
                <p>
                    <label for="save-as-image-pdfcrowd-wizard-cm-pp">
                        <input type="radio"
                               id="save-as-image-pdfcrowd-wizard-cm-pp"
                               name="save-as-image-pdfcrowd-wizard-cm"
                               value="pp"
                               autocomplete="off">
                        Password protected pages
                    </label>
                </p>
                <p>
                    <label for="save-as-image-pdfcrowd-wizard-cm-data">
                        <input type="radio"
                               id="save-as-image-pdfcrowd-wizard-cm-data"
                               name="save-as-image-pdfcrowd-wizard-cm"
                               value="data"
                               autocomplete="off">
                        Pages with data entered by users (web forms)
                    </label>
                </p>
                <p>
                    <label for="save-as-image-pdfcrowd-wizard-cm-canvas">
                        <input type="radio"
                               id="save-as-image-pdfcrowd-wizard-cm-canvas"
                               name="save-as-image-pdfcrowd-wizard-cm"
                               value="canvas"
                               autocomplete="off">
                        Pages with canvas drawings created by users
                    </label>
                </p>
            </div>
        </div>
    </div>
    <div style='margin-top: 2em'>
        <div id="save-as-image-pdfcrowd-wizard-done" class="button-primary">
            Finish
        </div>
        <div id="save-as-image-pdfcrowd-wizard-next" data-step="1" class="button-primary">
            Next
        </div>
    </div>
</div>

<style>
 .save-as-image-pdfcrowd-admin-settings {
     display: none;
 }
</style>
