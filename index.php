<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPOT MALARIA</title>
    <link rel="stylesheet" href="reset.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid container-main"> 
        <div class="row row--form">
            <div class="col-md-8 offset-md-2">
                <!-- FORM -->
                <form class="formContainer">
                    <!-- FORM-HEADER -->
                    <div class="form-header">
                        <h1 class="form-header-title">PARTNER STUDY PROPOSAL</h1>
                        <img src="SpotMalaria-logo.jpg" class="form-header-logo" alt="Spot Malaria - logo" title="SPOT MALARIA">
                    </div>
                    <!-- FORM-BODY -->
                    <div class="form-body">
                        <!-- INTRO -->
                        <div id="tabIntro" class="tab tab--intro">
                            <h2>Intro</h2>
                            <p>Spot Malaria aims to bring together malaria genetics with epidemiological information across both time and space. The project has two distinct but complementary goals;
                            <ul>
                                <li>to simplify genetic data reporting so that more users are able to analyse and interpret the key features of their data, focusing on what is of most importance for field research and malaria control in a timely manner; </li>
                                <li>and to create an open access global observatory across time and space for genetic variation and other relevant metadata such as malaria prevalence and deployment of control measures.</li>
                            </ul>
                            <p>This form is to capture the key information for a potential partner study for genetic analysis of P. falciparum or P. vivax samples as a basis for discussion about potential collaboration under the Spot Malaria umbrella.  For any questions, or to submit your completed forms, please contact <a href="email:support@malariagen.net">support@malariagen.net</a> 
                            </p>
                        </div>
                        <!-- PEOPLE INFORMATION -->
                        <div id="tabPeople" class="tab tab--people">
                            <div>
                                <h2 class="formBlock-title">People Information</h2>
                                <p class="formBlock-helpText">Please provide details of relevant stakeholders for this study. This information can be added to at a later stage.</p>
                            </div>
                            <h3>Main Contacts</h3>
                            <!-- Lead Investigator -->
                            <div class="form-group">
                                <label for="lead_investigator_name" class="label">Lead Investigator Name</label>
                                <input type="text" name="lead_investigator_name" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lead_investigator_affiliation">Lead Investigator Affiliation</label>
                                <input type="text" name="lead_investigator_affiliation" placeholder="Affiliation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lead_investigator_email">Lead Investigator Email</label>
                                <input type="email" name="lead_investigator_email" placeholder="Email" class="form-control">
                            </div>
                            <!-- Contact Person -->
                            <div class="form-group">
                                <label for="contact_person_name">Contact Person Name</label>
                                <input type="text" name="contact_person_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact_person_affiliation">Contact Person Affiliation</label>
                                <input type="text" name="contact_person_affiliation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact_person_email">Contact Person Email</label>
                                <input type="email" name="contact_person_email" class="form-control">
                            </div>
                            <!-- Key Investigator -->
                            <div class="form-group">
                                <label for="key_investigator_name">Key Investigator Name</label>
                                <input type="text" name="key_investigator_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="key_investigator_role">Key Investigator role in study</label>
                                <input type="text" name="key_investigator_role" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="key_investigator_affiliation">Key Investigator Affiliation</label>
                                <input type="text" name="key_investigator_affiliation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="key_investigator_email">Key Investigator Email</label>
                                <input type="email" name="key_investigator_email" class="form-control">
                            </div>                
                        </div>
                        <!-- STUDY INFORMATION -->
                        <div id="tabStudyInfo" class="tab tab--studyInfo">
                                <h2 class="formBlock-title">Study Information</h2>
                                <p class="formBlock-helpText">Please provide details about the study that was conducted to generate the samples.</p>
                            <div class="form-group">
                                <label for="study_description">Study Title</label>
                                <textarea name="study_description" id="" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <!-- SAMPLE INFORMATION INTRO -->
                        <div id="tabSampleInfoIntro" class="tab tab--sampleInfoIntro">
                            <h2 class="formBlock-title">Sample Information</h2>
                            <p class="formBlock-helpText">Please comple the relevant sections for your study.</p>
                        </div>
                        <!-- SAMPLE INFORMATION DBS-->
                        <div id="tabSampleInfoDBS" class="tab tab--sampleInfoDBS">
                            <h2>Dried Blood Spots (DBS) collected from malaria cases</h2>
                            <div class="form-group">
                                <p>
                                    Malaria confirmed by RDT?
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    Parasitaemia estimated by microscopy?
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    MMultiple samples from same patient?
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    Samples collected using protocol we provide?2
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <!-- SAMPLE INFORMATION PARASITE DNA-->
                        <div id="tabSampleInfoDNA" class="tab tab--sampleInfoDNA">
                            <h2>Extracted Parasite DNA</h2>
                            <div class="form-group">
                                <p>
                                    Malaria confirmed by RDT?
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    Parasitaemia estimated by microscopy?
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    MMultiple samples from same patient?
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    Samples collected using protocol we provide?2
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <!-- ALL SAMPLES -->
                        <div id="tabAllSamples" class="tab tab--allSamples">
                            <h2>All Samples</h2>
                            <p>Every sample submitted to the Sanger Malaria Programme for genetic analysis and to MalariaGEN Projects must: </p>
                            <ul>
                                <li>Have been collected in accordance with good research practice</li>
                                <li>Have local ethics approval including appropriate informed consent</li>
                                <li>Have approval from other local stakeholders (e.g. the local institutional review body) where appropriate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-footer">
                        <!-- STEPS -->
                        <div class="steps">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                        <!-- NAVIGATION -->
                        <div class="navSubmit">
                            <button id="navPrev" type="button" class="btn navPrev" onclick="nextPrev(-1)">Previous</button>
                            <button id="navNext" type="button" class="btn navNext" onclick="nextPrev(1)">Next</button>
                            <input id="submitBtn" class="submitBtn" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="row row--footer">
            <div class="col-md-8 offset-md-2">
                <div class="footer-info">
                    <h2>Key Information</h2>
                    <p>The Sanger Malaria Programme working through the MalariaGEN collaborative framework is committed to integrating genetic and epidemiological data to understand the evolutionary changes in malaria relevant genomes (human, parasite and vector) particularly in response to control measures. By partnering with research and public health programmes operating in endemic regions through the Spot Malaria Project we are committed to producing actionable knowledge for the purpose of controlling and eliminating malaria.</p>
                </div>
                <div class="footer-logos">
                </div>
            </div>
        </footer>

        <!-- JS SCRIPTS -->
        <!-- Bootstrap -->
        <script src="scripts.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
</body>
</html>