<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/87e22d7b4c.js" crossorigin="anonymous"></script>
</head>
<body>
    <main id="main" class="main">
        <div class="content">
            <div class="logo"></div>

            <!-- Form Navigation -->
            <nav class="nav">
                <div class="navItem" data-nav="0">
                    <i class="navIcon fas fa-user-friends"></i>
                    <h3 class="navTitle">People Info</h3>
                </div>
                <div class="navItem" data-nav="1">
                    <i class="navIcon far fa-file-alt"></i>
                    <h3 class="navTitle">Study Info</h3>
                </div>
                <div class="navItem" data-nav="2">
                    <i class="navIcon fas fa-vial"></i>
                    <h3 class="navTitle">Sample Info</h3>
                </div>
                <div class="navItem" data-nav="3">
                    <i class="navIcon fas fa-database"></i>
                    <h3 class="navTitle">Data</h3>
                </div>
                <div class="navItem" data-nav="4">
                    <i class="navIcon fas fa-sign-out-alt"></i>
                    <h3 class="navTitle">Data released</h3>
                </div>
                <div class="navItem" data-nav="5">
                    <i class="navIcon fas fa-info"></i>
                    <h3 class="navTitle">Key info</h3>
                </div>
            </nav>

            <!-- Form -->
            <form action="" class="form">  

                <!-- Section - People information -->
                <div id="section-people" class="form-section hidden" data-index="0">
                    <h1 class="section-title">People information</h1>
                    <p class="section-text">Please provide details of relevant stakeholders for this study. This information can be added to at a later stage.</p>
                    
                    <!-- Sub-section - Lead Investigator -->
                    <div class="subSection">
                        <h3 class="subSection-info">Lead investigator</h3>
                        <div class="formGroup">
                            <div class="form-inputGroup">
                                <div class="form-inputGroupEl">
                                    <label for="leadName" class="label">Name</label>
                                    <input type="text" name="leadName" class="input">
                                </div>
                                <div class="form-inputGroupEl">
                                    <label for="leadEmail" class="label">Email</label>
                                    <input type="text" name="leadEmail" class="input">
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="leadAffil" class="label">Affiliation</label>
                                <input type="text" name="leadAffil" class="input">
                            </div>
                        </div>
                    </div>

                    <!-- Sub-section - Contact person -->
                    <div class="subSection">
                        <h3 class="subSection-info">Contact person</h3>
                        <div class="formGroup">
                            <div class="form-inputGroup">
                                <div class="form-inputGroupEl">
                                    <label for="contactName" class="label">Name</label>
                                    <input type="text" name="contactName" class="input">
                                </div>
                                <div class="form-inputGroupEl">
                                    <label for="contactEmail" class="label">Email</label>
                                    <input type="text" name="contactEmail" class="input">
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="contactAffil" class="label">Affiliation</label>
                                <input type="text" name="contactAffil" class="input">
                            </div>
                        </div>
                    </div>

                    <!-- Sub-section - Key investigator -->
                    <div class="subSection">
                        <h3 class="subSection-info">Key investigator</h3>
                        <div class="formGroup">
                            <div class="form-inputGroup">
                                <div class="form-inputGroupEl">
                                    <label for="keyRole" class="label">Role in study</label>
                                    <input type="text" name="keyRole" class="input">
                                </div>
                                <div class="form-inputGroupEl">
                                    <label for="keyEmail" class="label">Email</label>
                                    <input type="text" name="keyEmail" class="input">
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="keyAffil" class="label">Affiliation</label>
                                <input type="text" name="keyAffil" class="input">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section - Study Information -->
                <div id="section-study" class="form-section hidden" data-index="1">
                    <h1 class="section-title">Study information</h1>
                    <p class="section-text">Please provide details about the study that was conducted to generate the samples.</p>

                    <!-- Sub-section - Study details -->
                    <div class="subSection">
                        <h3 class="subSection-info">Study details</h3>
                        <div class="formGroup">
                            <div class="form-input">
                                <label for="studyTitle" class="label">Study title</label>
                                <input type="text" class="input" name="studyTitle">
                            </div>
                            <div class="form-input">
                                <label for="studyDesc" class="label">Study description</label>
                                <textarea name="studyDesc" id="" cols="30" rows="10" class="textArea"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Section - Sample Information -->
                <div id="section-sample" class="form-section hidden" data-index="2">
                    <h1 class="section-title">Sample information</h1>
                    <p class="section-text">Please complete the relevant sections for your study.</p>

                    <!-- Sub-section DBS -->
                    <div class="subSection">
                        <h3 class="subSection-info">Dried Blood Spots (DBS) collected from malaria cases</h3>
                        <div class="formGroup">
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">Malaria confirmed by RDT?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" > 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox form-input--inline">
                                <p class="pseudoLabel">Parasitaemia estimated by microscopy?</p>
                                <div class="form-radio">
                                    <label for="parasitaemiaY" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="parasitaemiaY" name="dbsConfirmedByRDT"> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="parasitaemiaN" class="label label--radio">No
                                        <input type="radio" class="radio" id="parasitaemiaN" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox form-input--inline">
                                <p class="pseudoLabel">Multiple samples from same patient?</p>
                                <div class="form-radio">
                                    <label for="multipleSamples" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="multipleSamples" name="dbsConfirmedByRDT"> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="multipleSamples" class="label label--radio">No
                                        <input type="radio" class="radio" id="multipleSamples" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">Samples collected using protocol we provide?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <p class="section-innerText">If you did not use the protocol we provide, please complete below:</p>

                    <!-- Sub-section DBS (cont.)-->
                    <div class="subSection">
                        <h3 class="subSection-info subSection-info--empty"> </h3>
                        <div class="formGroup">
                            <div class="form-input form-input--inline">
                                <label for="leadAffil" class="label">What type of filter paper was used?</label>
                                <input type="text" name="leadAffil" class="input">
                            </div>
                            <div class="form-input form-input--inline">
                                <label for="leadAffil" class="label">Approximate volume of blood per spot?</label>
                                <input type="text" name="leadAffil" class="input">
                            </div>
                            <div class="form-input form-input--inline">
                                <label for="leadAffil" class="label">Number of blood spots collected per patient?</label>
                                <input type="text" name="leadAffil" class="input">
                            </div>
                        </div>
                    </div>

                    <!-- Sub-section DBS table -->
                    <div class="subSection">
                        <table class="subSection-table">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Site</th>
                                    <th>Species</th>
                                    <th>Sample number</th>
                                    <th>ETA at Sanger</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Sub-Section Extracted Parasite DNA -->
                    <div class="subSection">
                        <h3 class="subSection-info">Extracted parasite DNA</h3>
                        <div class="formGroup">
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">Malaria confirmed by RDT?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox form-input--inline">
                                <p class="pseudoLabel">Parasitaemia estimated by microscopy?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox form-input--inline">
                                <p class="pseudoLabel">Multiple samples from same patient?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">Samples filtered to deplete human DNA?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">Samples screened for human DNA contamination (i.e. by qPCR)?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">Time in culture will be provided?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">Not applicable
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">DBS from same patient?</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subSection">
                        <table class="subSection-table">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Site</th>
                                    <th>Species</th>
                                    <th>Sample number</th>
                                    <th>ETA at Sanger</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Sub-Section - All Samples -->
                    <div class="subSection">
                        <h3 class="subSection-info">All samples
                            <p class="help-text">Every sample submitted to the Sanger Malaria Programme for genetic analysis and to MalariaGEN projects must:
                            </p>
                            <ul class="help-text help-text--list">
                                <li>Have been collected in accordance with good research practice</li>
                                <li>Have local ethics approval incliding appropriate informed consent</li>
                                <li>Have approval from other local stakeholders (e.g. the local institutional review body) where appropriate</li>
                            </ul> 
                        </h3>
                        <div class="formGroup">
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">
                                Please confirm that you will take full responsability for local ethics approval
                                and for any other review processes that are required at the local level.
                                </p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">

                                <div class="form-input">
                                    <label for="studyDesc" class="label">
                                    Please provide details of the Ethics Committees that approved the study
                                    and ethics approval number(s). </label>
                                    <textarea name="studyDesc" id="" cols="30" rows="10" class="textArea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="section-innerText"><sup>2,3</sup> A protocol for DBS collection is avaliable on request and at <a href="https://www.malariagen.net/network/capacity-building/methods" target="_blank">MalariaGEN</a>. Every sample submitted to the Sanger Malaria Programme for genetic analysis and to MalariaGEN projects must:</p>
                    <ul class="section-innerText section-innerText--list">
                        <li>Be part of an approved partner study with a partner study reference code</li>
                        <li>Be submitted witha a complete Sample Manifest that provides collection date and location</li>
                    </ul>


                    <div class="subSection">
                        <h3 class="subSection-info subSection-info--empty"></h3>
                        <div class="formGroup">
                            <div class="form-input form-input--checkbox form-input--inline">
                                <p class="pseudoLabel">I understand that samples submitted without prior approval or without a complete sample manifest will not be processed and may be returned.</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked=""> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="section-innerText section-innerText--title">How will samples be used</h3>
                    <p class="section-innerText">State-of-the-art genetic and genomic technologies will be used to genotype parasite DNA - either extracted from venous blood or isolated from the finger-prick blood samples of confirmed malaria patients. This processes may include DNA extraction, genotyping, targeted sequencing, selective whole genome amplification, genome sequencing and the downstream statistical and computational analysis of these data. When a partner study is approved, it is our intent to use our best efforts to achieve high quality data on each sample within the limitation of the quality and quantity of parasiteDNA and our capacity will change over time.</p>
                    
                </div>

                <!-- Section - Data returned -->
                <div id="section-data" class="form-section hidden" data-index="3">
                    <h1 class="section-title">Data that will be returned to you</h1>
                    <p class="section-text">Data products providing sample level information that may be produced and returned include:</p>
                    <ul class="section-text section-text--list">
                        <li>
                            <span class="bold">Genetic Report Card:</span> A user-friendly summary of the main findings for each sample including information on drug resistance markers and other information such as multiplicity of infection and markers of geographic origin. As research progresses, assays are iteratively improving as new relavant markers can be reliably incorporated, From the time a sample and completed manifest is received we aim to return the Genetic Report Card within 6-8 weeks.
                        </li>
                        <li><span class="bold">Whole Genome Data:</span> Whenthe parasite DNA is of high enough quality and quantity and capacity allows a sample be submitted for whole genome sequencing. Sequence read data is deposited at ENA immediately after sequencing. The timeline for this is dependent on external factors therefore while we aim to return data within 9 month of receiving samples with a completed sample manifest although this cannot be guaranteed.</li>
                    </ul>

                    <!-- Sub-section - products -->
                    <div class="subSection">
                        <h3 class="subSection-info">Which of the above products is most suitable for your needs?</h3>
                        <div class="formGroup">
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <div class="form-checkbox">
                                    <label for="geneticReportCard" class="label label--checkbox">Genetic Report Card
                                        <input type="checkbox" class="checkbox" id="geneticReportCard" name="geneticReportCard"> 
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                </div>
                                <div class="form-checkbox">
                                    <label for="wholeGenomeData" class="label label--checkbox">Whole Genome Data
                                        <input type="checkbox" class="checkbox" id="wholeGenomeData" name="wholeGenomeData"> 
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <div class="form-input">
                                    <label for="studyDesc" class="label">
                                    How do you antecipate using it? Please describe public health and research uses.</label>
                                    <textarea name="studyDesc" id="" cols="30" rows="10" class="textArea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="subSection">
                        <table class="subSection-table">
                            <p class="table-pseudoLabel">Who should receive products directly from the project? This can be updated at a later date.</p>
                            <thead>
                                <tr>
                                    <th>Name of product recipient</th>
                                    <th>Role in study</th>
                                    <th>Affiliation</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="subSection">
                        <h3 class="subSection-info">Spot Malaria is planning on producing training materials to support the use of its products. Please let us know which, if any of the following you would be interested in using, if available.</h3>
                        <div class="formGroup">
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <p class="pseudoLabel">For the Genetic Report Card</p>
                                <div class="form-checkbox">
                                    <label for="dbsRdtConfirmed" class="label label--checkbox">How-to document
                                        <input type="checkbox" class="checkbox" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked=""> 
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--checkbox">How-to online course
                                        <input type="checkbox" class="checkbox" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--checkbox">How-to face-to-face course
                                        <input type="checkbox" class="checkbox" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--checkbox">Other. Please specify.
                                        <input type="checkbox" class="checkbox" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox form-input--inline">
                                <p class="pseudoLabel">For the Whole Genome Data</p>
                                <div class="form-checkbox">
                                    <label for="dbsRdtConfirmed" class="label label--checkbox">Advanced course
                                        <input type="checkbox" class="checkbox" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked=""> 
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--checkbox">Other. Plase specify.
                                        <input type="checkbox" class="checkbox" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--checkbox"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Section - Data published and released -->
                <div id="section-dataReleased" class="form-section hidden" data-index="4">
                    <h1 class="section-title">Data that will be published and released</h1>
                    <p class="section-text">Combined data from all partner studies will be used for two main purposes:</p>
                    <ul class="section-text section-text--list">
                        <li>To evaluate and develop the Spot Malaria methodology, e.g. (a) to determine the sensitivity and accuracy of this approach when applied to samples in the field; and (b) to develop a data report format and tools for data analysis that will be of practical utility for researchers working in the field and for control programmes.
                        </li>
                        <li>To establish a prospective and systematic sampling framework for a global observatory that will provide open access information about how the parasite population is changing and evolving in different parts of the work, together with global analyses of drug resistance, malaria transmission and other factors relevant to malaria control and elimination.
                    </ul>
                    <div class="subSection">
                        <table class="subSection-table">
                            <thead>
                                <tr style="text-align: left;">
                                    <th>Product</th>
                                    <th>Mechanism for release</th>
                                    <th>Timeline and restrictions on use</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>Partner study description</li>
                                            <li>Lead investigator</li>
                                            <li>Contact person</li>
                                            <li>Study site information</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <p>MalariaGEN website</p>
                                    </td>
                                    <td>
                                        <p>When a data product arising from the partner study has been shared publically</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Sequence Read data</p>
                                    </td>
                                    <td>
                                        <p>Deposited in European Nucleotide Archive (ENA)</p>
                                    </td>
                                    <td>
                                        <p>Immediate open access in line with Sanger Institute policy</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <ul>
                                        <li>Genetic Report Card</li>
                                        <li>Whole Genome Data</li>
                                    </ul>
                                    </td>
                                    <td>
                                        <p>MalariaGEN website</p>
                                    </td>
                                    <td>
                                        <p>As soon as possible and not later than 6 month after returning to partners</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="subSection">
                        <h3 class="subSection-info subSection-info--empty"></h3>
                        <div class="formGroup">
                            <div class="form-input form-input--checkbox form-input--inline">
                                <p class="pseudoLabel">Please confirm that you are happy for your samples to be used as above.</p>
                                <div class="form-radio">
                                    <label for="dbsRdtConfirmed" class="label label--radio">Yes
                                        <input type="radio" class="radio" id="dbsRdtConfirmed" name="dbsConfirmedByRDT" checked=""> 
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                    <label for="dbsRdtNotConfirmed" class="label label--radio">No
                                        <input type="radio" class="radio" id="dbsRdtNotConfirmed" name="dbsConfirmedByRDT">
                                        <span class="checkmark checkmark--radio"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input form-input--checkbox  form-input--inline">
                                <div class="form-input">
                                    <label for="studyDesc" class="label">
                                    If you said No, please describe the ethical or institutional restrictions on the release of these data.</label>
                                    <textarea name="studyDesc" id="" cols="30" rows="10" class="textArea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Section - Key Information -->
                <div id="section-keyInfo" class="form-section hidden" data-index="5">
                    <h1 class="section-title">Key Information</h1>
                    <p class="section-text">The Sanger Malaria Programme working through the MalariaGEN collaborative framework is commited to integrating genetic and epidemiological data to understand the evolutionary changes in malaria relevant genomes (human, parasite and vector) paticularly in respooonse to control measures. By partenenring with research and public health programmes operating in endemic regions through the Spot malaria Project we are committed to producing actionable knowledge for the purpose of controlling and eliminating malaria.</p>
                </div>
      
            </form>

            <!-- Form Section navigation -->
            <nav class="formNav">
                <button class="btn navBtn btn--prev" data-increment="-1">Previous Section</button>
                <button class="btn navBtn btn--next" data-increment="1">Next Section</button>
            </nav>

        </div>




        <!-- 
        <footer class="footer">
            <p>Spot Malaria aims to bring together malaria genetics with epidemiological information across both time and space. 
            The project has two distinct but complementary goals:</p>
            <ul class="goals">
                <li class="goal">to simplify genetic data reporting so that more users are able to analyse and interpret the key features of 
                    their data, focusing on what is of most importance for field research and malaria control in a timely manner;</li>
                <li class="goal">and to create an open access global observatory across time and space for genetic variation and other relevant 
                    metadata such as malaria prevalence and deployment of control measures.</li>
            </ul>
            <p>This form is to capture the key information for a potential partner study for genetic analysis of <i>P. falciparum</i> or 
            <i>P. vivax</i> samples as a basis for discussion about potentialcollaboration under the Spot Malaria umbrella.</p>
            <p>For any questions, or to submit your completed forms, please contact <a href="mailto:support@malariagen.net">
                support@malariagen.net</a></p>
        </footer>
         -->
    </main>

    <!-- Scripts -->
    <script src="js/main.js"></script>
</body>
</html>