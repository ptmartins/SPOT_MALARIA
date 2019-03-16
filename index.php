<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPOT MALARIA</title>
    <link rel="stylesheet" href="reset.css">
    <!-- Styles -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid container-main"> 
        <div class="row row--form">
            <div class="col-md-8 offset-md-2">
                <!-- FORM -->
                <form class="formContainer">
                    <div class="form-sideNav">
                        <ul class="sideNav-list">
                            <li class="sideNav-item folder" data-tab="0"><span>1. </span> Intro</li>
                            <li class="sideNav-item folder" data-tab="1"><span>2. </span> People Information</li>
                            <li class="sideNav-item folder" data-tab="2"><span>3. </span> Study information</li>
                            <li class="sideNav-item folder" data-tab="3"><span>4. </span> Sample Info - DBS</li>
                            <li class="sideNav-item folder" data-tab="4"><span>5. </span> Sample Info - DNA</li>
                            <li class="sideNav-item folder" data-tab="5"><span>6. </span> All Samples</li>
                            <li class="sideNav-item folder" data-tab="6"><span>7. </span> Data returned</li>
                            <li class="sideNav-item folder" data-tab="7"><span>8. </span> Data published</li>
                        </ul>
                        <div class="sideNav-logos">
                            <img src="SpotMalaria-logo.jpg" alt="Spot Malaria Logo" title="Spot Malaria">
                            <img src="logo.svg" alt="MalariaGen Logo" title="MalariaGen" >
                        </div>
                    </div>   
                    <div class="form-content">
                        <!-- FORM-HEADER -->
                        <div class="form-header">
                            <h1 class="form-header-title">PARTNER STUDY PROPOSAL <span id="title-folder" class="title-folder"></span></h1>
                        </div>
                        <!-- FORM-BODY -->
                        <div class="form-body">
                            <!-- INTRO -->
                            <div id="tabIntro" class="tab tab--intro" data-tab="0" data-title="Intro">
                                <!-- <h2>Intro</h2> -->
                                <p>Spot Malaria aims to bring together malaria genetics with epidemiological information across both time and space. The project has two distinct but complementary goals;
                                <ul>
                                    <li>to simplify genetic data reporting so that more users are able to analyse and interpret the key features of their data, focusing on what is of most importance for field research and malaria control in a timely manner; </li>
                                    <li>and to create an open access global observatory across time and space for genetic variation and other relevant metadata such as malaria prevalence and deployment of control measures.</li>
                                </ul>
                                <p>This form is to capture the key information for a potential partner study for genetic analysis of P. falciparum or P. vivax samples as a basis for discussion about potential collaboration under the Spot Malaria umbrella.  For any questions, or to submit your completed forms, please contact <a href="email:support@malariagen.net">support@malariagen.net</a> 
                                </p>
                            </div>
                            <!-- PEOPLE INFORMATION -->
                            <div id="tabPeople" class="tab tab--people" data-tab="1" data-title="People Information">
                                <div>
                                    <p class="formBlock-helpText">Please provide details of relevant stakeholders for this study. This information can be added to at a later stage.</p>
                                </div>
                                <!-- Lead Investigator -->
                                <div class="form-group-wrapper">
                                    <h2 class="section-title">Lead Investigator</h2>
                                    <div class="form-group">
                                        <label for="lead_investigator_name" class="label">Lead Investigator Name</label>
                                        <input type="text" name="lead_investigator_name" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="lead_investigator_affiliation" class="label">Lead Investigator Affiliation</label>
                                        <input type="text" name="lead_investigator_affiliation" placeholder="Affiliation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="lead_investigator_email" class="label">Lead Investigator Email</label>
                                        <input type="email" name="lead_investigator_email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <!-- Contact Person -->
                                <div class="form-group-wrapper">
                                    <h2 class="section-title">Contact person</h2>
                                    <div class="form-group">
                                        <label for="contact_person_name" class="label">Contact Person Name</label>
                                        <input type="text" name="contact_person_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_person_affiliation" class="label">Contact Person Affiliation</label>
                                        <input type="text" name="contact_person_affiliation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_person_email" class="label">Contact Person Email</label>
                                        <input type="email" name="contact_person_email" class="form-control">
                                    </div>
                                </div>
                                <!-- Key Investigator -->
                                <div class="form-group-wrapper">
                                    <h2 class="section-title">Key Investigator</h2>
                                    <div class="form-group">
                                        <label for="key_investigator_name" class="label">Key Investigator Name</label>
                                        <input type="text" name="key_investigator_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="key_investigator_role" class="label">Key Investigator role in study</label>
                                        <input type="text" name="key_investigator_role" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="key_investigator_affiliation" class="label">Key Investigator Affiliation</label>
                                        <input type="text" name="key_investigator_affiliation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="key_investigator_email" class="label">Key Investigator Email</label>
                                        <input type="email" name="key_investigator_email" class="form-control">
                                    </div>
                                </div>                
                            </div>
                            <!-- STUDY INFORMATION -->
                            <div id="tabStudyInfo" class="tab tab--studyInfo" data-tab="2" data-title="Study Information">
                                <p class="formBlock-helpText">Please provide details about the study that was conducted to generate the samples.</p>
                                <div class="form-group">
                                    <label for="study_description" class="label">Study Title</label>
                                    <input type="text" name="study_description" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group form-group--textArea">
                                    <label for="study_description" class="label">Study Description</label>
                                    <textarea name="study_description" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <!-- SAMPLE INFORMATION INTRO -->
                            <div id="tabSampleInfoIntro" class="tab tab--sampleInfoIntro" data-tab="3" data-title="Sample Info - DBS">   
                                <p class="formBlock-helpText">Please comple the relevant sections for your study.</p>

                                <div class="form-group">
                                    <p class="label">Malaria confirmed by RDT? </p>
                                    <div class="form-subGroup form-subGroup--dbs">
                                        <h3 class="form-subGroup-title">Dried Blood Spots (DBS)</h3>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dbs" id="inlineCheckbox1" value="yes">
                                            <label class="form-check-label" for=""malaria-confirmed-dbs"">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dbs" id="inlineCheckbox2" value="no">
                                            <label class="form-check-label" for=""malaria-confirmed-dbs"">No</label>
                                        </div>
                                    </div>
                                    <div class="form-subGroup form-subGroup--dna">
                                        <h3 class="form-subGroup-title">Extracted Parasite DNA</h3>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dna" id="inlineCheckbox1" value="yes">
                                            <label class="form-check-label" for="malaria-confirmed-dna">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dna" id="inlineCheckbox2" value="no">
                                            <label class="form-check-label" for="malaria-confirmed-dna">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="label">Parasitaemia estimated by microscopy? </p> 
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <p class="label">Multiple samples from same patient? </p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <p class="label">Samples collected using protocol we provide?</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>   
                                </div>
                            </div>
                            <!-- SAMPLE INFORMATION PARASITE DNA-->
                            <div id="tabSampleInfoDNA" class="tab tab--sampleInfoDNA" data-tab="4" data-title="Sample Info - DNA">
                                <h2>Extracted Parasite DNA</h2>
                                <div class="form-group">
                                    <p class="label">Malaria confirmed by RDT?</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <p class="label">Parasitaemia estimated by microscopy?</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="label">Multiple samples from same patient?</p> 
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <p class="label">Samples collected using protocol we provide?</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </div>
                            </div>
                            <!-- ALL SAMPLES -->
                            <div id="tabAllSamples" class="tab tab--allSamples" data-tab="5" data-title="All Samples">
                                <p>Every sample submitted to the Sanger Malaria Programme for genetic analysis and to MalariaGEN Projects must: </p>
                                <ul class="form-list">
                                    <li class="form-listItem">Have been collected in accordance with good research practice</li>
                                    <li class="form-listItem">Have local ethics approval including appropriate informed consent</li>
                                    <li class="form-listItem">Have approval from other local stakeholders (e.g. the local institutional review body) where appropriate</li>
                                </ul>
                                <div class="form-group">
                                    <label for="study_description" class="label">Ethics approval</label>
                                    <div class="form-subGroup ">
                                        <p>Please confirm that you will take responsibility for local ethics approval and for any other review processes that are required at the local level.</p>
                                    </div>
                                    <div class="form-subGroup">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dbs" id="inlineCheckbox1" value="yes">
                                            <label class="form-check-label" for=""malaria-confirmed-dbs"">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dbs" id="inlineCheckbox2" value="no">
                                            <label class="form-check-label" for=""malaria-confirmed-dbs"">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group--textArea">
                                    <label for="study_description" class="label">Ethics approval details</label>
                                    <p>Please provide details of the ethics Committees that approved the study and ethics approval number(s).</p>
                                    <textarea name="study_description" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <p class="footNote">2, 3 A protocol for DBS collection is available on request and at https://www.malariagen.net/network/capacity-building/methods
Every sample submitted to the Sanger Malaria Programme for genetic analysis and to MalariaGEN Projects must: 
Be part of an approved partner study with a partner study reference code
Be submitted with a complete Sample Manifest that provides collection date and location.</p>
                                <div class="form-group">
                                    <label for="study_description" class="label">Ethics approval</label>
                                    <div class="form-subGroup ">
                                        <p>Please confirm that you will take responsibility for local ethics approval and for any other review processes that are required at the local level.</p>
                                    </div>
                                    <div class="form-subGroup">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dbs" id="inlineCheckbox1" value="yes">
                                            <label class="form-check-label" for=""malaria-confirmed-dbs"">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="malaria-confirmed-dbs" id="inlineCheckbox2" value="no">
                                            <label class="form-check-label" for=""malaria-confirmed-dbs"">No</label>
                                        </div>
                                    </div>
                                </div>
                                <p id="help-samples" class="help">How will samples be used?</p>
                                <p class="help-text">State-of-the-art genetic and genomic technologies will be used to genotype Parasite DNA - either extracted from venous blood or isolated from the finger-prick blood samples of confirmed malaria patients. The processes may include DNA extraction, genotyping, targeted sequencing, selective whole genome amplification, genome sequencing, and the downstream statistical and computational analysis of these data. When a partner study is approved, it is our intent to use our best efforts to achieve high quality data on each sample within the limitation of the quality and quantity of parasite DNA and our capacity which will change over time. </p>
                            </div>

                            <!-- DATA RETURNED -->
                            <div id="tabDataReturned" class="tab tab--dataReturned" data-tab="5" data-title="Data returned">
                                <p>Data products providing sample level information that that may be produced and returned include:</p>
                                <p><span>Genetic Report Card: </span>A user-friendly summary of the main findings for each sample including information on drug resistance markers and other information such as multiplicity of infection and markers of geographical origin. As research progresses, assays are iteratively improving as new relevant markers can be reliably incorporated. From the time a sample and completed manifest is received we aim to return the Genetic Report Card within 6-8 weeks.</p>
                                <p><span>Whole Genome Data: </span>When the parasite DNA is of high enough quality and quantity and capacity allows a sample may be submitted for whole genome sequencing. Sequence read data is deposited at ENA immediately after sequencing. The timeline for this is dependent on external factors therefore while we aim to return data within 9 months of receiving samples with a completed sample manifest although this cannot be guaranteed. </p>
                            </div>

                            <!-- DATA PUBLISHED -->
                            <div id="tabDataPublished" class="tab tab--dataPublished" data-tab="5" data-title="Data published">
                                <p>Combined data from all partner studies will be used for two main purposes</p>
                                <p><span>1. </span>To evaluate and develop the Spotmalaria methodology, e.g. (a) to determine the sensitivity and accuracy of this approach when applied to samples in the field; and (b) to develop a data report format and tools for data analysis that will be of practical utility for researchers working in the field and for control programmes.</p>
                                <p><span>2. </span>To establish a prospective and systematic sampling framework for a global observatory that will provide open access information about how the parasite population is changing and evolving in different parts of the work, together with global analyses of drug resistance, malaria transmission and other factors relevant to malaria control and elimination.</p>
                                <div class="form-grid">
                                    <div class="grid-title">Product</div>
                                    <div class="grid-title">Mechanism for Release</div>
                                    <div class="grid-title">Timeline and restrictions on use</div>
                                    <div class="grid-cell">
                                        <ul> Partner Study Description
                                            <li class="">Lead Investigator</li>
                                            <li class="">Contact Person with contact details</li>
                                            <li class="">Study Site Information</li>
                                        </ul>
                                    </div>
                                    <div class="grid-cell">MalariaGen website</div>
                                    <div class="grid-cell">When a data product arising from the partner study has been shared publically</div>
                                    <div class="grid-cell">Sequence Read Data</div>
                                    <div class="grid-cell">MDeposited in European Nucleotide Archive (ENA)</div>
                                    <div class="grid-cell">Immediate open access in line with Sanger Institute policy</div>
                                    <div class="grid-cell">Genetic Report Card Whole Genome Data</div>
                                    <div class="grid-cell">MalariaGEN website</div>
                                    <div class="grid-cell">As soon as possible and not later than 6 months after returning to partners</div>
                                </div>
                            </div>


                        </div>
                        <div class="form-footer">
                            <!-- NAVIGATION -->
                            <div class="navSubmit">
                                <button id="prevBtn" type="button" class="btn navPrev" data-nav="-1">Previous</button>
                                <button id="nextBtn" type="button" class="btn navNext" data-nav="1">Next</button>
                                <input id="submitBtn" class="submitBtn disabled" type="submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-info">
                    <h2>Key Information</h2>
                    <p>The Wellcome Sanger Institute (WSI) Parasites and Microbes Programme working through the MalariaGEN collaborative framework is committed to integrating genetic and epidemiological data to understand the evolutionary changes in malaria relevant genomes (human, parasite and vector) particularly in response to control measures. By partnering with research and public health programmes operating in endemic regions through the Spot Malaria Project we are committed to producing actionable knowledge for the purpose of controlling and eliminating malaria.</p>
                </div>
                <div class="footer-logos">
                </div>
            </div>
        </footer>

        <!-- JS SCRIPTS -->
        <script src="scripts.js"></script>
    </div>
</body>
</html>