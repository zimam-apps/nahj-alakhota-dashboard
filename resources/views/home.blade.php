<x-layout>
    <x-slot name="title">الرئيسية</x-slot>

    <x-slot name="styles">
        <base href="{{url('/')}}">
    </x-slot>

    <x-slot name="additionalStyles">
        .about-section,
        .join-section,
        .contribution-section {
            background: url("{{url('/')}}/assets/images/noise.svg"),
            linear-gradient(182.86deg, #ffffff 6.06%, #715353 97.62%);
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: end;
            background: linear-gradient(
                    170.3deg,
                    rgba(109, 71, 48, 0.5) -35.98%,
                    #090300 104.41%
            ),
            url({{url('/')}}/assets/images/hero-banner.png);
        }

        .goals-section,
        .conditions-section,
        .faqs-section {
            background: url("{{url('/')}}/assets/images/noise.svg");
        }
    </x-slot>

    <x-slot name="headerTextColor">#fff</x-slot>
    <!-- hero section -->
    <section class="hero-section relative z-10 bg-[#A9C6BC]" style="background: linear-gradient(170.3deg,rgba(109, 71, 48, 0.5) -35.98%,#090300 104.41%),url({{url('/')}}/assets/images/hero-banner.png)">
        <div class="container">
            <div class="flex flex-col items-center space-y-16 lg:flex-row lg:justify-between lg:items-end pb-20">
                <!-- Text content -->
                <div class="w-full lg:w-2/3 text-content">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-white hero-title">
                        <!-- منصة تدريب العاملين في مشروع على خطاه في مسار الهجرة النبوية -->
                    </h2>
                    <p class="text-sm mb-8 leading-relaxed text-white hero-richText">
                        <!-- منصة إلكترونية متكاملة تهدف إلى تأهيل العاملين في مشروع "على
                          خُطاه"، من مرشدين، ومقدّمي خدمات، وموظفين إداريين. تشمل المنصة
                          جميع مراحل التدريب بدءًا من الاستقطاب، التسجيل، التدريب النظري،
                          الترشيح، وحتى توقيع العقود. -->
                    </p>
                    <div class="py-4"></div>
                    <div class="flex">
                        <a href="{{route('join-request')}}" class="block btn-primary rounded-full font-bold py-2 px-6 transition duration-300">
                            <span> تقديم طلب الإنضمام</span>
                        </a>
                    </div>
                </div>

                <!-- Image placeholder -->
                <div class="w-full lg:w-1/3 flex justify-center lg:justify-end left-images">
                    <!-- Replace this div with your actual image -->
                    <div class="w-full h-full flex items-center justify-between hero-partners">
                        <!-- <img
                            loading="lazy"
                            src="{{url('/')}}/assets/images/sela-logo.svg"
                            alt="hero section sponsers"
                          />
                          <img
                            loading="lazy"
                            src="{{url('/')}}/assets/images/roaia-logo.png"
                            alt="hero section sponsers"
                          />
                          <img
                            loading="lazy"
                            src="{{url('/')}}/assets/images/khotah-logo.png"
                            alt="hero section sponsers"
                          /> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section -->
    <section data-v-e834c0fc="" id="about-section" class="about-section pt-16">
        <div data-v-e834c0fc="" class="container">
            <div data-v-e834c0fc="" class="grid lg:grid-cols-2 gap-x-16 items-start">
                <!-- Text Content -->
                <div data-v-e834c0fc="" class="relative">
                    <div data-v-e834c0fc="">
                        <h1 data-v-e834c0fc=""
                            class="text-3xl md:text-[36px] lg:text-[40px] font-bold mb-4 text-secondary leading-[1.4] about-title">
                            <!-- ’’على خُطاه‘‘ هو مشروع وطني رائد في المملكة العربية السعودية -->
                        </h1>
                    </div>
                </div>
                <!-- Polygon Image Container -->
                <div data-v-e834c0fc="" class="relative space-y-8">
                    <p data-v-e834c0fc="" class="text-lg text-gray-700 leading-relaxed about-richText">
                        <!-- هو مشروع طموح في المملكة العربية السعودية يهدف إلى استعادة
                          وتطوير المواقع التاريخية التي تشهد على رحلة الهجرة النبوية من
                          مكة إلى المدينة. المشروع يستلهم رؤية ’’رؤية السعودية 2030‘‘ في
                          تعزيز السياحة الثقافية والدينية. -->
                    </p>
                    <br data-v-e834c0fc=""/>
                    <div data-v-e834c0fc="" class="flex">
                        <a href="{{route('join-request')}}"
                           class="block btn-primary inverted rounded-full font-bold py-2 px-6 transition duration-300"><span
                                    data-v-e834c0fc=""> تقديم طلب الإنضمام</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-e834c0fc="" class="about-banner">
            <!-- <img
                data-v-e834c0fc=""
                src="{{url('/')}}/assets/images/about-banner.png"
                alt="about banner"
                class="md:mt-[-110px]"
              /> -->
        </div>
    </section>
    <!-- goals section -->
    <section data-v-145cd6b5="" id="goals-section" class="goals-section py-20">
        <div class="container" data-v-inspector="src/components/home/our-goals.vue:3:5" data-v-145cd6b5="">
            <div class="grid lg:grid-cols-2 gap-16 items-start" data-v-inspector="src/components/home/our-goals.vue:4:7"
                 data-v-145cd6b5="">
                <!-- Text Content -->
                <div class="relative max-w-[660px] lg:max-w-[522px]" data-v-inspector="src/components/home/our-goals.vue:6:9"
                     data-v-145cd6b5="">
                    <div data-v-inspector="src/components/home/our-goals.vue:7:11" data-v-145cd6b5="">
                        <h1 class="goals-title text-3xl md:text-[36px] lg:text-[40px] font-bold mb-4 text-secondary leading-[1.4]"
                            data-v-inspector="src/components/home/our-goals.vue:8:13" data-v-145cd6b5="">
                            <!-- أهداف المنصة -->
                        </h1>
                        <p class="goals-richText text-lg text-gray-700 leading-relaxed"
                           data-v-inspector="src/components/home/our-goals.vue:13:13" data-v-145cd6b5="">
                            <!-- تهدف المنصة إلى تدريب وتأهيل الكوادر الوطنية للعمل في مشروع
                              "على خطاه"، من خلال نظام إلكتروني متكامل يُسهّل التسجيل، إدارة
                              الدورات، وقياس الأداء لضمان جودة التدريب واستدامته. -->
                        </p>
                    </div>
                </div>
                <!-- goals / cards -->
                <div class="goals-container d-flex flex-col space-y-8">
                    <div class="goal-card rounded-2xl bg-[#EEEBEB] p-6 sm:p-10 flex flex-col gap-y-6 bg-[#EEEBEB]">
                        <div class="icon"></div>
                        <h3 class="title font-semibold text-[18px]"></h3>
                        <p class="text-secondary description"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contribution section -->
    <section data-v-e834c0fc="" id="contribution-section" class="contribution-section pt-16">
        <div data-v-e834c0fc="" class="container">
            <div data-v-e834c0fc="" class="grid lg:grid-cols-2 gap-x-16 items-start">
                <!-- Text Content -->
                <div data-v-e834c0fc="" class="relative">
                    <div data-v-e834c0fc="">
                        <h1 data-v-e834c0fc=""
                            class="contribution-title text-3xl md:text-[36px] lg:text-[40px] font-bold mb-4 text-secondary leading-[1.4]">
                            <!-- منصة تدريب العاملين في مشروع على خطاه في مسار الهجرة النبوية -->
                        </h1>
                    </div>
                </div>
                <!-- Polygon Image Container -->
                <div data-v-e834c0fc="" class="relative space-y-8">
                    <p data-v-e834c0fc="" class="contribution-richText text-lg text-gray-700 leading-relaxed">
                        <!-- منصة إلكترونية متكاملة تهدف إلى تأهيل العاملين في منصة تدريب
                          العاملين في مشروع على خطاه، من مرشدين، ومقدّمي خدمات، وموظفين
                          إداريين. تشمل المنصة جميع مراحل التدريب بدءًا من الاستقطاب،
                          التسجيل، التدريب النظري، الترشيح، وحتى توقيع العقود. -->
                    </p>
                    <br data-v-e834c0fc=""/>
                    <div data-v-e834c0fc="" class="flex">
                        <a href="{{route('join-request')}}"
                           class="block btn-primary inverted rounded-full font-bold py-2 px-6 transition duration-300"><span
                                    data-v-e834c0fc=""> تقديم طلب الإنضمام</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-e834c0fc="" class="contribution-banner">
            <!-- <img
                data-v-e834c0fc=""
                src="{{url('/')}}/assets/images/contribution-banner.png"
                alt=""
                class="md:mt-[-110px]"
              /> -->
        </div>
    </section>
    <!-- faqs section -->
    <section data-v-111c6fc3="" id="faqs-section" class="faqs-section py-20">
        <div data-v-111c6fc3="" class="container">
            <div data-v-111c6fc3="" class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Text Content -->
                <div data-v-111c6fc3="" class="relative max-w-[660px] lg:max-w-[522px]">
                    <div data-v-111c6fc3="">
                        <h1
                                class="faqs-title text-3xl md:text-[36px] lg:text-[40px] font-bold mb-4 text-secondary leading-[1.4]">
                            <!-- الأسئلة الشائعة -->
                        </h1>
                        <p class="faqs-richText text-lg text-gray-700 leading-relaxed">
                            <!-- نُجيب هنا على أبرز التساؤلات التي قد تدور في ذهنك حول التسجيل،
                            التدريب، الشروط، وآلية القبول في المنصة لتسهيل تجربتك وضمان
                            وضوح جميع الخطوات. -->
                        </p>
                    </div>
                </div>
                <!--  -->
                <div data-v-111c6fc3="" class="d-flex flex-col space-y-8">
                    <!-- FAQ Accordion -->
                    <div class="space-y-4 mb-12 faqs-container">
                        <div class="faq-card rounded-xl overflow-hidden shadow-md bg-[#EEEBEB]">
                            <button class="w-full p-4 sm:p-6 text-right flex justify-between items-center focus:outline-none">
                                <div class="flex items-center gap-2">
                                    <span class="iterator w-8 h-8 flex justify-center items-center bg-[#F9F9F9]/70 rounded-lg"></span>
                                    <h3 class="question text-lg font-bold text-dark">
                                    </h3>
                                </div>
                                <span class="w-8 h-8 bg-white rounded-md p-1 indecator flex items-center justify-center"></span>
                            </button>
                            <div
                                    class="accordionContent mr-[40px] px-6 overflow-hidden">
                                <p class="answer text-secondary leading-relaxed pb-5">

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coditions section -->
    <section data-v-a3082493="" id="conditions-section" class="conditions-section py-20">
        <div data-v-a3082493="" class="container">
            <div data-v-a3082493="" class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Text Content -->
                <div data-v-a3082493="" class="relative max-w-[660px] lg:max-w-[522px]">
                    <div data-v-a3082493="">
                        <h1 data-v-a3082493=""
                            class="conditions-title md:text-[36px] lg:text-[40px] font-bold mb-4 text-secondary leading-[1.4]">
                            <!-- شروط التقديم -->
                        </h1>
                        <p data-v-a3082493="" class="conditions-richText text-gray-700 leading-relaxed">
                            <!-- للالتحاق ببرنامج التدريب، يجب على المتقدم استيفاء مجموعة من
                              الشروط الأساسية التي تضمن الجدية والاستعداد للمشاركة في مشروع
                              "على خطاه"، بما يحقق أهداف التدريب والتأهيل بكفاءة. -->
                        </p>
                        <div data-v-a3082493="" class="py-3"></div>
                        <div data-v-a3082493="" class="flex">
                            <a href="{{route('join-request')}}"
                               class="block btn-primary inverted rounded-full font-bold py-2 px-6 transition duration-300"><span
                                        data-v-a3082493=""> تقديم طلب الإنضمام</span></a>
                        </div>
                    </div>
                </div>
                <!-- conditions -->
                <div data-v-a3082493="" class="d-flex flex-col space-y-8 conditions-container">
                    <div data-v-a3082493=""
                         class="condition-card rounded-2xl overflow-hidden p-4 sm:px-6 shadow-md bg-[#EEEBEB]">
                        <div data-v-a3082493="" class="flex items-center gap-2">
                            <span data-v-a3082493=""
                                  class="iterator inline-flex min-w-8 min-h-8 justify-center items-center bg-[#F9F9F9]/70 rounded-lg"></span>
                            <h3 data-v-a3082493="" class="condition text-lg font-bold text-dark"></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- join section -->
    <section data-v-e834c0fc="" id="join-section" class="join-section pt-16">
        <div data-v-e834c0fc="" class="container">
            <div data-v-e834c0fc="" class="grid lg:grid-cols-2 gap-x-16 items-start">
                <!-- Text Content -->
                <div data-v-e834c0fc="" class="relative">
                    <div data-v-e834c0fc="">
                        <h1 data-v-e834c0fc=""
                            class="join-title text-3xl md:text-[36px] lg:text-[40px] font-bold mb-4 text-secondary leading-[1.4]">
                            <!-- انضم الآن إلى برنامج تدريب العاملين في مشروع على خطاه لتأهيل
                              الكوادر الوطنية ضمن مسار الهجرة النبوية -->
                        </h1>
                    </div>
                </div>
                <!-- Polygon Image Container -->
                <div data-v-e834c0fc="" class="relative space-y-8">
                    <p data-v-e834c0fc="" class="join-richText text-lg text-gray-700 leading-relaxed">
                        <!-- منصة إلكترونية متكاملة تهدف إلى تأهيل العاملين في منصة تدريب
                          العاملين في مشروع على خطاه، من مرشدين، ومقدّمي خدمات، وموظفين
                          إداريين. تشمل المنصة جميع مراحل التدريب بدءًا من الاستقطاب،
                          التسجيل، التدريب النظري، الترشيح، وحتى توقيع العقود. -->
                    </p>
                    <br data-v-e834c0fc=""/>
                    <div data-v-e834c0fc="" class="flex">
                        <a href="{{route('join-request')}}"
                           class="block btn-primary inverted rounded-full font-bold py-2 px-6 transition duration-300"><span
                                    data-v-e834c0fc=""> تقديم طلب الإنضمام</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-e834c0fc="" class="join-banner">
            <!-- <img
                data-v-e834c0fc=""
                src="{{url('/')}}/assets/images/join-banner.png"
                alt=""
                class="md:mt-[-110px]"
              /> -->
        </div>
    </section>
    <x-slot name="scripts">
        <script src="{{url('/')}}/assets/js/script.js"></script>
        <script src="{{url('/')}}/assets/js/headers.js"></script>
        <script src="{{url('/')}}/assets/js/navlinks.js"></script>
    </x-slot>
</x-layout>
