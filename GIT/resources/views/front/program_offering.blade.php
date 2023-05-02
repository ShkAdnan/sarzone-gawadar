@extends('front.layout.app')


<style>
    ul>li{
        font-size: 18px !important;
    }
    .hide {
        display: none;
    }
    .read-more-show{
        font-size: 18px;
    }
    .text-style{
     color: #02606e;
 }
</style>


@section('content')



    @include('front.layout.navBar')



    <!-- Section -->

    <div class="container-fluid p-0" style="margin-top: 110px;">

        <div class="container pt-4">

            <h1 class="text-style">We are Offering the following Programs</h1>

            <dl style="padding:30px;">

                <dt><h3>DAE Architecture</h3></dt>

                <dd>

                    The three years diploma of Associate Engineer (DAE) in Architecture trains the students in the formation of free hand drawings, designing and construction of domestic, commercial, educational, religious, recreational and health related buildings.
                    <a class="read-more-show text-primary" href="javascript:void(0)">Show Syllabus</a>
                        <div class="row mt-5" style="display: none;">
                            <div class="col-lg-12 text-center">
                                <h4 class="text-uppercase"><u>Architecture Technology</u></h4>
                                <h4 class="text-uppercase"><u>Subjects for studies yearly wise</u></h4>
                                <h4 class="text-uppercase text-left mt-5 mb-2"><u>First year</u></h4>
                                <table  class="table table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>Ser</th>
                                            <th>Subject</th>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>C</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Islamiat and Pak studies</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1</td>
                                         </tr>
                                         <tr>
                                             <th>2</th>
                                             <td>English</td>
                                             <td>2</td>
                                             <td>0</td>
                                             <td>2</td>
                                          </tr>
                                          <tr>
                                             <th>3</th>
                                             <td>Applied Mathematics-I</td>
                                             <td>3</td>
                                             <td>0</td>
                                             <td>3</td>
                                          </tr>
                                          <tr>
                                             <th>4</th>
                                             <td>Applied Physics </td>
                                             <td>1</td>
                                             <td>3</td>
                                             <td>2</td>
                                          </tr>
                                          <tr>
                                             <th>5</th>
                                             <td>Communication Skills</td>
                                             <td>0</td>
                                             <td>3</td>
                                             <td>1</td>
                                          </tr>
                                          <tr>
                                             <th>6</th>
                                             <td>Intro To Architecture</td>
                                             <td>1</td>
                                             <td>3</td>
                                             <td>2</td>
                                          </tr>
                                          <tr>
                                             <th>7</th>
                                             <td>Architecture Graphics-I</td>
                                             <td>0</td>
                                             <td>9</td>
                                             <td>3</td>
                                          </tr>
                                          <tr>
                                             <th>8</th>
                                             <td>Building Meterials & Construction-I</td>
                                             <td>2</td>
                                             <td>3</td>
                                             <td>3 </td>
                                          </tr>
                                          <tr>
                                             <th>9</th>
                                             <td>Computer Aided Drafting & presentation -I</td>
                                             <td>1</td>
                                             <td>6</td>
                                             <td>3</td>
                                          </tr>
                                        </tbody>
                                </table>
                                <h4 class="text-uppercase text-left mt-5 mb-2"><u>Second year</u></h4>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Ser</th>
                                        <th>Subject</th>
                                        <th>T</th>
                                        <th>P</th>
                                        <th>C</th>
                                    </tr>
                                    <tr>
                                       <th>1</th>
                                       <td>Islamiat and Pak studies</td>
                                       <td>1</td>
                                       <td>0</td>
                                       <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Applied Mathematics -II</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                     </tr>
                                     <tr>
                                        <th>3</th>
                                        <td>Enviromental Studies</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                     </tr>
                                     <tr>
                                        <th>4</th>
                                        <td>Structural Mechanics & RCC Designs </td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                     </tr>
                                     <tr>
                                        <th>5</th>
                                        <td>Architecture Drawing & Designs -I</td>
                                        <td>0</td>
                                        <td>9</td>
                                        <td>3</td>
                                     </tr>
                                     <tr>
                                        <th>6</th>
                                        <td>Computer Aided Drafting & Presentation -II</td>
                                        <td>0</td>
                                        <td>6</td>
                                        <td>2</td>
                                     </tr>
                                     <tr>
                                        <th>7</th>
                                        <td>Building Materials & Construction-II</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                     </tr>
                                     <tr>
                                        <th>8</th>
                                        <td>History of Architecture</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2 </td>
                                     </tr>
                                     <tr>
                                        <th>9</th>
                                        <td>Surveying And Leveling</td>
                                        <td>2</td>
                                        <td>6</td>
                                        <td>4</td>
                                     </tr>
                                </table>
                                <h4 class="text-uppercase text-left mt-5 mb-2"><u>Third year</u></h4>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Ser</th>
                                        <th>Subject</th>
                                        <th>T</th>
                                        <th>P</th>
                                        <th>C</th>
                                    </tr>
                                    <tr>
                                       <th>1</th>
                                       <td>Islamiat and Pak studies</td>
                                       <td>1</td>
                                       <td>0</td>
                                       <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Enviromental Studies -II</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                     </tr>
                                     <tr>
                                        <th>3</th>
                                        <td>Architecture Drawing & Designs -II</td>
                                        <td>0</td>
                                        <td>12</td>
                                        <td>4</td>
                                     </tr>
                                     <tr>
                                        <th>4</th>
                                        <td>Model Markting </td>
                                        <td>0</td>
                                        <td>6</td>
                                        <td>2</td>
                                     </tr>
                                     <tr>
                                        <th>5</th>
                                        <td>Specification and  Estimation</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                     </tr>
                                     <tr>
                                        <th>6</th>
                                        <td>Building Materials & Construction-III</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                     </tr>
                                     <tr>
                                        <th>7</th>
                                        <td>Construction Management & Safety Practices</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                     </tr>
                                     <tr>
                                        <th>8</th>
                                        <td>Computer Aided Drafting & presentation -III</td>
                                        <td>0</td>
                                        <td>6</td>
                                        <td>2</td>
                                     </tr>

                                </table>
                            </div>
                        </div>

                </dd>

                <dt><h3 class="mt-5">DAE Civil</h3></dt>
                <dd>
                    Our renowned Civil Engineering Technology program prepares you to be a dynamic participant in the design and creation of our built environment where humans live. This ranges from the metropolitan infrastructure of bridges, airports and harbors to the neighborhood design of water supply systems, sewage disposal, residential layout and areas such as water management, the resource issue of the 21st century.
                    <a class="read-more-show text-primary" href="javascript:void(0)">Show Syllabus</a>
                    <div class="row mt-5" style="display: none;">
                        <div class="col-lg-12 text-center">
                            <h4 class="text-uppercase"><u>Civil Technology</u></h4>
                            <h4 class="text-uppercase"><u>Subjects for studies yearly wise</u></h4>
                            <h4 class="text-uppercase text-left mt-5 mb-2"><u>First year</u></h4>
                            <table class="table mx-auto table-bordered" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Subject</th>
                                        <th>T</th>
                                        <th>P</th>
                                        <th>C</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.</th>
                                        <td>Islamiat & Pakistan Studies</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2.</th>
                                        <td>English</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>3.</th>
                                        <td>Applied Mathematics-I</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>4.</th>
                                        <td>Applied Physics</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>5.</th>
                                        <td>Applied Chemistry</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>6.</th>
                                        <td>Basic Civil Engineering Surveying</td>
                                        <td>2</td>
                                        <td>6</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th>7.</th>
                                        <td>Engeenring Materials & Construction Techniques</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>8.</th>
                                        <td>Basic Civil Engineering Drawing</td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>9.</th>
                                        <td>Workshop Practice</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>10.</th>
                                        <td>Computer Application</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="text-uppercase text-left mt-5 mb-2"><u>Second year</u></h4>
                            <table class="table mx-auto table-bordered" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Subject</th>
                                        <th>T</th>
                                        <th>P</th>
                                        <th>C</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.</th>
                                        <td>Islamiat & Pakistan Studies</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2.</th>
                                        <td>Applied Mathematics-II</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>                                        <tr>
                                        <th>3.</th>
                                        <td>Communication Skills & Report Writting</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>

                                    <tr>
                                        <th>4.</th>
                                        <td>Public Health Technology</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>5.</th>
                                        <td>Advanced Civil Engineering Surveying</td>
                                        <td>2</td>
                                        <td>6</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th>6.</th>
                                        <td>Advanced Construction Techniques</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>7.</th>
                                        <td>Quantity Surveying</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>8.</th>
                                        <td>Civil Engineering Drawing & Auto CAD</td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>9.</th>
                                        <td>Engeenring Mechanics</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>10.</th>
                                        <td>Enterpreneurship</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="text-uppercase text-left mt-5 mb-2"><u>Third year</u></h4>
                            <table class="table mx-auto table-bordered" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Subject</th>
                                        <th>T</th>
                                        <th>P</th>
                                        <th>C</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.</th>
                                        <td>Islamiat & Pakistan Studies</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2.</th>
                                        <td>Advanced Quantity Surveying</td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>3</td>
                                    </tr>                                        <tr>
                                        <th>3.</th>
                                        <td>Construction Projects Planning & Management</td>
                                        <td>2</td>
                                        <td>6</td>
                                        <td>4</td>
                                    </tr>

                                    <tr>
                                        <th>4.</th>
                                        <td>Enviroment Health & Safety</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>5.</th>
                                        <td>Hydrulics and Imigation Engineering</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th>6.</th>
                                        <td>Transportation Engeenring</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>7.</th>
                                        <td>Concrete Technology & RCC Design</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th>8.</th>
                                        <td>Soil Mechanics & Bridge Engineering</td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>9.</th>
                                        <td>Engeenring Mechanics</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>10.</th>
                                        <td>Enterpreneurship</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </dd>

                <dt><h3 class="mt-5">DAE Electronics</h3></dt>

                <dd>
                    Electronics Technology diploma and degree programs provide students with an understanding of electronic circuitry and electrical theory. Through a combination of lab work and classroom lectures, students learn how to apply this knowledge to install, service and repair a wide variety of electronic equipment.
                    <a class="read-more-show text-primary" href="javascript:void(0)">Show Syllabus</a>
                    <div class="row mt-5" style="display: none;">
                        <div class="col-lg-12 text-center">
                            <h4 class="text-uppercase"><u>Electronics Technology</u></h4>
                            <h4 class="text-uppercase"><u>Subjects for studies yearly wise</u></h4>
                            <h4 class="text-uppercase text-left mt-5 mb-2"><u>First year</u></h4>
                            <table class="table mx-auto table-bordered" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Subject</th>
                                        <th>T</th>
                                        <th>P</th>
                                        <th>C</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.</th>
                                        <td>Islamiyat & Pakistan Studies</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2.</th>
                                        <td>English</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>3.</th>
                                        <td>Applied Mathematics - I</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>3</td>
                                    </tr>

                                    <tr>
                                        <th>4.</th>
                                        <td>Applied Physics</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>5.</th>
                                        <td>Applied Chemistry</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>6.</th>
                                        <td>Computers Fundamentals</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>7.</th>
                                        <td>Electrical Circuits</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th>8.</th>
                                        <td>Electronics Devices</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>9.</th>
                                        <td>Engineering Drawing & Computer Aided Design.</td>
                                        <td>0</td>
                                        <td>6</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>10.</th>
                                        <td>Electrical Wiring</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="text-uppercase text-left mt-5 mb-2"><u>Second year</u></h4>
                            <table class="table mx-auto table-bordered" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Subject</th>
                                        <th>T</th>
                                        <th>P</th>
                                        <th>C</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.</th>
                                        <td>Islamiat & Pakistan Studies</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th>2.</th>
                                        <td>Applied Mathematics – II</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>3.</th>
                                        <td>Communication Skills</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>

                                    <tr>
                                        <th>4.</th>
                                        <td>Propagation of Electromagnetic Waves</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th>5.</th>
                                        <td>Analog Electronics</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th>6.</th>
                                        <td>Electrical Instruments & Measurements</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>7.</th>
                                        <td>Electrical Machines</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>8.</th>
                                        <td>Communication System</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>9.</th>
                                        <td>Digital Electronics</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th>10.</th>
                                        <td>PCB Fabrication</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="text-uppercase text-left mt-5 mb-2"><u>Third year</u></h4>
                            <table  class="table table-bordered" >
                                <tr>
                                    <th>Ser</th>
                                    <th>Subject</th>
                                    <th>T</th>
                                    <th>P</th>
                                    <th>C</th>
                                </tr>
                                <tr>
                                   <td>1</td>
                                   <td>Islamiat and Pak studies</td>
                                   <td>1</td>
                                   <td>0</td>
                                   <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Industrial Management and Human Relations</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Occupational Safety, Health and Environment</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Computer Architecture</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>4</td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Equipment Maintenance & Servicing</td>
                                    <td>1</td>
                                    <td>6</td>
                                    <td>3</td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>Projects</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>2</td>
                                 </tr>
                                 <tr>
                                    <td>7</td>
                                    <td>Industrial Electronics</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>3</td>
                                 </tr>
                                 <tr>
                                    <td>8</td>
                                    <td>Power Electronics</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>3 </td>
                                 </tr>
                                 <tr>
                                    <td>9</td>
                                    <td>Microcontroller Programming and Applications</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>3</td>
                                 </tr>

                            </table>
                        </div>
                    </div>

                </dd>

            </dl>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-5">

                    <h1 class="text-style">Vocational Courses</h1>

                    <ul style="list-style-type: circle !important;padding-left:55px;">
                        <li>Industrial Electrician</li>
                        <li>Auto Electrician</li>
                        <li>Auto Mechanic</li>
                        <li>Computer Applications and Office Manager</li>
                        <li>OBM Repair Technician</li>
                        <li>Civil Drafting and AutoCAD</li>
                        <li>Surveyor</li>
                        <li>Carpenter</li>
                        <li>Welder</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('front.layout.footer')
<script>
   $(".read-more-show").on("click",function(){
       var syllabus=$(this).siblings("div")
       syllabus.slideToggle(500);
       if ($(this).html()=="Show Syllabus") {
        $(this).html("Hide Syllabus")
       } else {
        $(this).html("Show Syllabus")
       }
   })
</script>
@endsection

