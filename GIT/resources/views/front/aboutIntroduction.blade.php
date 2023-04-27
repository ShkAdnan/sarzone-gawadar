 @extends('front.layout.app')

 @section('content')
     <style>
         .bg-img {
             background-image: url("{{ asset('front/images/cover img.jpeg') }}");
             background-size: cover;
             background-position: top center;
             background-repeat: no-repeat;
             height: 90vh;
             width: 100%;
             /* padding: 40vh 0px 50px 0px; */
         }

         .introduction {

             margin-top: 150px;

             color: black;

             font-size: 30px;

             border-bottom: 2px solid #5459f8;

             border-left: 4px solid #5459f8;

         }



         #introduction:hover {

             border-bottom: 4px solid #5459f8;

         }



         #Introductionpera {

             padding: 20px;

             font-family: 'Poppins', sans-serif;

             font-weight: 400px;

         }

  .text-style{
        color: #02606e;
       }

         #mainbg {

             height: 30px;

         }
         @media (max-width: 502px) {
            .bg-img {

             background-position: top center;

             height: 60vh;
             width: 100%;
             /* padding: 40vh 0px 50px 0px; */
         }

         }

     </style>

     @include('front.layout.navBar')
     <!-- introduction -->
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="bg-img pt-3"></div>
             </div>
         </div>
     </div>
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="full">

                    <h1 class="introduction px-2 text-style" style="margin-top: 40px;">HISTORICAL BACKGROUND</h1>

                </div>

                <p>

                    It was in 2002-2003 that the then President of Pakistan, General Parvez Musharraf, accorded priority to
                    the

                    development of human and natural resources of Pakistan in general and Balochistan in particular.

                    Accordingly, then Prime Minister, Mir Zafarullah Khan Jamali constituted a committee of experts to
                    assess

                    the educational and vocational needs of the Gwader youth in particular and Baloch youth in general.

                </p>

                <p>

                    The committee was focused to carry out situational analysis, work out future requirements of
                    vocational/

                    technical/ higher education, ascertain needs of the area with special reference to Gwadar Deep Seaport
                    and

                    analyse emerging technologies for future needs.

                </p>

                <p>

                    The committee noted expectations of the area and after detailed analysis put forward their views as
                    given

                    below:-

                </p>

                <ol style="padding:30px;">

                    <li>The present level of vocational training, technical and higher education is not compatible, should

                        therefore be enhanced.</li>

                    <li>In order to meet future needs of Gwadar area, emerging technologies be introduced.</li>

                    <li>To enhance opportunities for local employment – need for the skilled local manpower, existing
                        vocational

                        training centre be strengthened.</li>

                    <li>Multiple prompt strategies to be adopted for training of all kinds of local manpower to meet
                        emerging

                        requirements for Gwadar seaport and related industrial / business activitiesin and around Gwadar
                        city.

                    </li>

                </ol>

                <p>

                    The detailed study carried out by the committee amply highlighted the requirement of establishing an

                    institute in Gwadar which should meet its technologically educated manpower shortfalls. This formed the

                    basis of developing Gwadar Institute of Technology. The institute was envisaged to cover emerging

                    technologies in the fields of food preservation and industrial electronics.



                    Thereafter it was agreed by the Federal and Balochistan Provincial Governments that its establishment
                    cost

                    would be borne by the Federal Government and recurring expenditures to be met by the Government of

                    Balochistan. The constructional works started in 2005

                    and got completed in 2012.

                </p>
            </div>


        </div>

        <div class="row">
            <div class="col-12">

                <div class="full">

                    <h1 class="introduction px-2 my-2 text-style">Vision</h1>

                </div>

                <p>

                    Gwader Institute of Technology (GIT) to be transformed into an internationally recognized Engineering
                    University as an ICON for professional engineers to contribute in social economic development of Gwader
                    focusing on emerging technologies

                </p>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div class="full">

                    <h1 class="introduction px-2 my-2 text-style">Mission</h1>

                </div>

                <p>

                    Produce manpower; commensurate with needs of the industry, to improve its quality to enhance
                    employability
                    of students by moving from supply based system to demand driven mechanism.

                </p>
            </div>

        </div>

        <div class="row mb-5">
            <div class="col-12">

                <div class="full">

                    <h1 class="introduction px-2 my-2 text-style">Role</h1>

                </div>

                <p>

                    To strengthen effectiveness and competitiveness of technical education through policy reforms to
                    improve
                    quality, relevance and efficiency of Technical Education and Vocational Training in the Province of
                    Balochistan.

                </p>

                <ol style="padding: 30px;">

                    <li>To improve flexibility and responsiveness to labour / job market required for technical education.

                    </li>

                    <li>

                        To give a boost to the regional and local development of the area and produce skilled manpower
                        needed
                        for the operations of Gwadar port as well as allied industries.

                    </li>

                    <li>

                        To contribute to overall social and economic development of Balochistan with special reference to
                        coastal areas.

                    </li>

                    <li>

                        To divert prospective seekers of higher education from a purposeless general education to a
                        meaningful
                        technical education.

                    </li>

                    <li>

                        To improve the institutional framework for policy formulation planning and management of the
                        technical
                        education system.

                    </li>

                    <li>

                        To strengthen entrepreneurship by establishing strong linkages between institutions and industries
                        of
                        Gwadar port.

                    </li>

                </ol>

                Selective expansion for the technical graduates of coastal areas and introduction of new technologies.

            </div>
        </div>
     </div>




     <!-- introduction end -->



     @include('front.layout.footer')
 @endsection
