<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/logo.ico" type="image/x-icon"/>
    <title>تقديم طلب الإنضمام</title>
    <link href="{{url('/')}}/assets/css/main.css" rel="stylesheet"/>
    <link href="{{url('/')}}/assets/css/join-request.css" rel="stylesheet"/>
    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        @keyframes slide-right {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
        .success-toast {
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            font-family: inherit;
        }
        .error-toast {
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            font-family: inherit;
        }
    </style>
</head>

<body>
<header class="fixed left-0 right-0 z-20 top-0 px-4 h-[80px] md:h-[100px] sm:px-14 lg:px-20">
    <div class="container-fluid h-full mx-auto py-3">
        <div class="flex items-center h-full justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/">
                    <img
                            src="{{url('/')}}/assets/images/logo-dark.svg"
                            alt="site logo"
                            class="object-contain"
                    />
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <!-- @click="toggleMenu" -->
            <button class="list-button md:hidden text-gray-700 focus:outline-none">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#222"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="x-mark"
                >
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>

                <svg
                        class="w-6 h-6 bars"
                        fill="none"
                        stroke="#222"
                        viewBox="0 0 24 24"
                >
                    <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                    ></path>
                </svg>
            </button>

            <nav data-v-c970699f=""
                    class="header-nav hidden md:flex gap-x-6 space-x-reverse"
            ></nav>
            <div class="hidden md:flex gap-2">
                <a href="#" class="block py-2 btn-secondary rounded-full px-5 text-primary transition duration-300">
                    تسجيل الدخول
                </a>

                <a href="javascript:" class="block py-2 btn-primary rounded-full px-5 text-primary2 transition duration-300">
                    تقديم طلب الإنضمام
                </a>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="fadeOut mobileNav md:hidden fixed w-full left-0 top-[50px] px-3 pt-6">
            <div class="relative h-full rounded-xl bg-[#422b1d]/80 border-2 border-primary p-5 flex items-center justify-center flex-col">
                <div class="nav-container flex items-center justify-center flex-col">
                    <a href="/about" class="list_item text-lg block py-2 text-primary transition duration-300">
                        <span class="block hover:-translate-x-1 transition"></span>
                    </a>
                </div>
                <!--  -->
                <div class="py-4"></div>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="block py-2 btn-secondary rounded-full px-5 text-primary transition duration-300">
                        تسجيل الدخول
                    </a>

                    <a href="javascript:" class="block py-2 btn-primary rounded-full px-5 text-primary2 transition duration-300">
                        تقديم طلب الإنضمام
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- content -->
<main class="relative w-100">
    <div class="py-8"></div>
    <section class="py-20 w-full flex justify-center relative">
        <div class="form-container p-6 md:p-8">
            <h1 class="text-2xl md:text-3xl font-bold text-center mb-0">
                قدّم طلبك الآن
            </h1>

            <p class="text-gray-600 text-center">
                املأ النموذج أدناه ليتم مراجعة طلبك والانضمام إلى فريقنا لخدمة ضيوف
                الرحمن.
            </p>

            <form id="applicationForm" action="{{ route('join-request.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8 w-full">
                @csrf
                <!-- الاسم الثلاثي -->
                <div style="margin: 0">
                    <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="الاسم الثلاثي"
                            class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                    />
                </div>

                <!-- البريد الإلكتروني -->
                <div>
                    <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="البريد الإلكتروني"
                            class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                    />
                </div>

                <!--  -->
                <div>
                    <input
                            type="tel"
                            id="mobile"
                            name="mobile"
                            placeholder="الجوال"
                            class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                    />
                </div>

                <!--  -->
                <div>
                    <select
                            id="gender"
                            name="gender"
                            class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                    >
                        <option value="">-- اختر الجنس --</option>
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                </div>

                <div class="grid md:grid-cols-2 gap-x-4 gap-y-8">
                    <!-- تاريخ الميلاد -->
                    <div>
                        <input
                                type="date"
                                id="birth"
                                name="birth"
                                placeholder="اختر تاريخ الميلاد"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                        />
                    </div>

                    <!-- فصيلة الدم -->
                    <div>
                        <select
                                id="blood_type"
                                name="blood_type"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                        >
                            <option value="">-- اختر فصيلة الدم --</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <!-- اختر المدينة  -->
                    <div>
                        <select
                                id="city"
                                name="city"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                        >
                            <option value="" class="text-gray-200">
                                -- اختر مدينة الإقامة --
                            </option>
                            <option value="الرياض">الرياض</option>
                            <option value="جدة">جدة</option>
                            <option value="مكة المكرمة">مكة المكرمة</option>
                            <option value="المدينة المنورة">المدينة المنورة</option>
                            <option value="الدمام">الدمام</option>
                            <option value="الخبر">الخبر</option>
                            <option value="الطائف">الطائف</option>
                            <option value="القصيم">القصيم</option>
                            <option value="تبوك">تبوك</option>
                            <option value="حائل">حائل</option>
                            <option value="أبها">أبها</option>
                            <option value="جازان">جازان</option>
                            <option value="الباحة">الباحة</option>
                            <option value="نجران">نجران</option>
                            <option value="الحدود الشمالية">الحدود الشمالية</option>
                            <option value="الجوف">الجوف</option>
                            <option value="الخرج">الخرج</option>
                            <option value="ينبع">ينبع</option>
                            <option value="القطيف">القطيف</option>
                            <option value="الظهران">الظهران</option>
                            <option value="المدينة الصناعية">المدينة الصناعية</option>
                            <option value="الجبيل">الجبيل</option>
                        </select>
                    </div>

                    <!-- اختر مقاس  -->
                    <div>
                        <select
                                id="uniform_size"
                                name="uniform_size"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                        >
                            <option value="" class="text-gray-200">
                                -- اختر مقاس الزى الرسمى --
                            </option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                            <option value="X-Large">X-Large</option>
                            <option value="2X-Large">2X-Large</option>
                            <option value="3X-Large">3X-Large</option>
                        </select>
                    </div>

                    <!-- المؤهل العلمي -->
                    <div>
                        <select
                                id="education"
                                name="education"
                                class="appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                        >
                            <option value="">-- اختر المؤهل التعليمى --</option>
                            <option value="ثانوية عامة">ثانوية عامة</option>
                            <option value="دبلوم">دبلوم</option>
                            <option value="بكالوريوس">بكالوريوس</option>
                            <option value="ماجستير">ماجستير</option>
                            <option value="دكتوراه">دكتوراه</option>
                        </select>
                    </div>

                    <!-- اللغات  -->
                    <div>
                        <select
                                id="languages"
                                name="languages[]"
                                class="selectpicker appearance-none w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#c8bd99] focus:border-transparent"
                                multiple
                                style="height: 150px;"
                        >
                            <option disabled>-- اختر اللغات --</option>
                            <option value="العربية">العربية</option>
                            <option value="الإنجليزية">الإنجليزية</option>
                            <option value="الفرنسية">الفرنسية</option>
                            <option value="الإسبانية">الإسبانية</option>
                            <option value="الألمانية">الألمانية</option>
                            <option value="الصينية">الصينية</option>
                            <option value="الروسية">الروسية</option>
                            <option value="أخرى">أخرى</option>
                        </select>
                    </div>
                </div>

                <!-- صورة الهوية -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        صورة الهوية الوطنية/الإقامة <span class="text-red-500">*</span>
                    </label>
                    <label for="personal_id_image" class="file-upload relative overflow-hidden">
                        <input
                                type="file"
                                id="personal_id_image"
                                name="personal_id_image"
                                accept="image/*,.pdf"
                                class="absolute h-full left-0 top-0"
                        />
                        <div class="flex flex-col gap-2 items-center">
                            <span class="block">
                                <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                            d="M10.6252 11.6673C10.6252 12.0125 10.3454 12.2923 10.0002 12.2923C9.65503 12.2923 9.3752 12.0125 9.3752 11.6673V4.61571L9.37015 4.62167C9.19458 4.82887 9.02267 5.04784 8.86191 5.25261L8.82465 5.30007C8.66446 5.50402 8.49593 5.71828 8.36505 5.85294C8.12446 6.10046 7.72877 6.10608 7.48125 5.86549C7.23373 5.62491 7.22811 5.22922 7.46869 4.9817C7.54261 4.90565 7.66397 4.75414 7.84163 4.52795L7.88082 4.47803C8.03921 4.27625 8.22504 4.0395 8.41648 3.81357C8.62165 3.57144 8.8513 3.31995 9.08086 3.12443C9.1959 3.02645 9.32556 2.92981 9.46506 2.85516C9.59959 2.78317 9.78497 2.70898 10.0002 2.70898C10.2154 2.70898 10.4008 2.78317 10.5354 2.85516C10.6748 2.92981 10.8045 3.02645 10.9195 3.12443C11.1491 3.31995 11.3788 3.57144 11.5839 3.81357C11.7754 4.03949 11.9611 4.27618 12.1195 4.47796L12.1588 4.52795C12.3364 4.75414 12.4578 4.90565 12.5317 4.9817C12.7723 5.22922 12.7667 5.62491 12.5192 5.86549C12.2716 6.10608 11.8759 6.10046 11.6354 5.85294C11.5045 5.71828 11.3359 5.50402 11.1758 5.30007L11.1385 5.2526C10.9777 5.04784 10.8058 4.82886 10.6303 4.62167L10.6252 4.61571V11.6673Z"
                                            fill="#75797C"
                                    />
                                    <path
                                            d="M18.0895 11.8753C18.2044 11.5498 18.0337 11.1928 17.7082 11.0779C17.3827 10.9631 17.0257 11.1338 16.9108 11.4593L16.7159 12.0114C16.332 13.0993 16.0604 13.866 15.7816 14.4408C15.5097 15.0012 15.2568 15.3217 14.9413 15.5449C14.6259 15.7681 14.2395 15.8999 13.6205 15.9697C12.9857 16.0414 12.1723 16.0423 11.0187 16.0423H8.98164C7.82799 16.0423 7.0146 16.0414 6.37984 15.9697C5.76086 15.8999 5.37447 15.7681 5.059 15.5449C4.74353 15.3217 4.49069 15.0012 4.21879 14.4408C3.93995 13.866 3.66837 13.0993 3.28441 12.0114L3.08954 11.4593C2.97466 11.1338 2.61766 10.9631 2.29216 11.0779C1.96666 11.1928 1.79592 11.5498 1.9108 11.8753L2.11812 12.4627C2.48678 13.5073 2.78096 14.3408 3.09416 14.9864C3.41781 15.6535 3.78722 16.1763 4.33704 16.5653C4.88685 16.9543 5.50283 17.1287 6.23962 17.2118C6.95261 17.2923 7.83652 17.2923 8.94422 17.2923H11.0561C12.1638 17.2923 13.0477 17.2923 13.7607 17.2118C14.4975 17.1287 15.1135 16.9543 15.6633 16.5653C16.2131 16.1763 16.5825 15.6535 16.9062 14.9864C17.2194 14.3408 17.5136 13.5073 17.8822 12.4627L18.0895 11.8753Z"
                                            fill="#75797C"
                                    />
                                </svg>
                            </span>
                            <p class="text-gray-500 mt-2">
                                اسحب وأفلِت أو اختر الملف الذي تريد تحميله
                            </p>
                            <p class="text-sm text-gray-400">الحجم الأقصى 5MB</p>
                        </div>
                    </label>
                </div>

                <!-- السيرة الذاتية -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        السيرة الذاتية (اختياري)
                    </label>
                    <label for="cv_file" class="file-upload relative overflow-hidden">
                        <input
                                type="file"
                                id="cv_file"
                                name="cv_file"
                                accept=".pdf,.doc,.docx"
                                class="absolute h-full left-0 top-0"
                        />
                        <div class="flex flex-col gap-2 items-center">
                            <span class="block">
                                <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                            d="M10.6252 11.6673C10.6252 12.0125 10.3454 12.2923 10.0002 12.2923C9.65503 12.2923 9.3752 12.0125 9.3752 11.6673V4.61571L9.37015 4.62167C9.19458 4.82887 9.02267 5.04784 8.86191 5.25261L8.82465 5.30007C8.66446 5.50402 8.49593 5.71828 8.36505 5.85294C8.12446 6.10046 7.72877 6.10608 7.48125 5.86549C7.23373 5.62491 7.22811 5.22922 7.46869 4.9817C7.54261 4.90565 7.66397 4.75414 7.84163 4.52795L7.88082 4.47803C8.03921 4.27625 8.22504 4.0395 8.41648 3.81357C8.62165 3.57144 8.8513 3.31995 9.08086 3.12443C9.1959 3.02645 9.32556 2.92981 9.46506 2.85516C9.59959 2.78317 9.78497 2.70898 10.0002 2.70898C10.2154 2.70898 10.4008 2.78317 10.5354 2.85516C10.6748 2.92981 10.8045 3.02645 10.9195 3.12443C11.1491 3.31995 11.3788 3.57144 11.5839 3.81357C11.7754 4.03949 11.9611 4.27618 12.1195 4.47796L12.1588 4.52795C12.3364 4.75414 12.4578 4.90565 12.5317 4.9817C12.7723 5.22922 12.7667 5.62491 12.5192 5.86549C12.2716 6.10608 11.8759 6.10046 11.6354 5.85294C11.5045 5.71828 11.3359 5.50402 11.1758 5.30007L11.1385 5.2526C10.9777 5.04784 10.8058 4.82886 10.6303 4.62167L10.6252 4.61571V11.6673Z"
                                            fill="#75797C"
                                    />
                                    <path
                                            d="M18.0895 11.8753C18.2044 11.5498 18.0337 11.1928 17.7082 11.0779C17.3827 10.9631 17.0257 11.1338 16.9108 11.4593L16.7159 12.0114C16.332 13.0993 16.0604 13.866 15.7816 14.4408C15.5097 15.0012 15.2568 15.3217 14.9413 15.5449C14.6259 15.7681 14.2395 15.8999 13.6205 15.9697C12.9857 16.0414 12.1723 16.0423 11.0187 16.0423H8.98164C7.82799 16.0423 7.0146 16.0414 6.37984 15.9697C5.76086 15.8999 5.37447 15.7681 5.059 15.5449C4.74353 15.3217 4.49069 15.0012 4.21879 14.4408C3.93995 13.866 3.66837 13.0993 3.28441 12.0114L3.08954 11.4593C2.97466 11.1338 2.61766 10.9631 2.29216 11.0779C1.96666 11.1928 1.79592 11.5498 1.9108 11.8753L2.11812 12.4627C2.48678 13.5073 2.78096 14.3408 3.09416 14.9864C3.41781 15.6535 3.78722 16.1763 4.33704 16.5653C4.88685 16.9543 5.50283 17.1287 6.23962 17.2118C6.95261 17.2923 7.83652 17.2923 8.94422 17.2923H11.0561C12.1638 17.2923 13.0477 17.2923 13.7607 17.2118C14.4975 17.1287 15.1135 16.9543 15.6633 16.5653C16.2131 16.1763 16.5825 15.6535 16.9062 14.9864C17.2194 14.3408 17.5136 13.5073 17.8822 12.4627L18.0895 11.8753Z"
                                            fill="#75797C"
                                    />
                                </svg>
                            </span>
                            <p class="text-gray-500 mt-2">
                                اسحب وأفلِت أو اختر الملف الذي تريد تحميله
                            </p>
                            <p class="text-sm text-gray-400">الحجم الأقصى 5MB</p>
                        </div>
                    </label>
                </div>

                <!-- التأكيد -->
                <div class="pb-4">
                    <div class="flex items-center checkbox relative">
                        <input
                                type="checkbox"
                                name="confirmation"
                                id="confirmation"
                                class="mt h-4 w-4 text-green-600 rounded border-gray-300 focus:ring-[#c8bd99]"
                        />
                        <span class="mr-2 text-sm font-bold text-gray-700">
                            أقر بأن جميع البيانات أعلاه صحيحة ومكتملة وأتحمل كافة
                            المسؤوليات في حال تبين خلاف ذلك.
                        </span>
                    </div>
                </div>

                <!-- زر التقديم -->
                <button type="submit" class="w-full btn-primary inverted text-white font-medium py-3 px-4 rounded-full transition duration-200">
                    تقديم طلب الانضمام
                </button>
            </form>
        </div>
        <div class="absolute bottom-0 left-0 w-full z-0">
            <img src="{{url('/')}}/assets/images/join-banner.png" alt="" class="w-full"/>
        </div>
    </section>
</main>
<!-- footer -->
<footer data-v-19b56bd5="" class="py-8 bg-[#170F0A] border relative z-10">
    <div class="mx-0 space-y-12 pt-6">
        <div class="block flex justify-center">
            <img src="{{url('/')}}/assets/images/logo.svg" width="120" alt="site-logo"/>
        </div>
        <div class="flex justify-center">
            <nav class="flex justify-around flex-wrap gap-y-5 gap-x-3 md:gap-x-8">
                <a aria-current="page" href="/" class="router-link-active router-link-exact-active hover:underline text-white font-medium">عن على خطاه</a>
                <a aria-current="page" href="/" class="router-link-active router-link-exact-active hover:underline text-white font-medium">أهدااف المنصة</a>
                <a aria-current="page" href="/" class="router-link-active router-link-exact-active hover:underline text-white font-medium">الأسئلة الشائعة</a>
                <a aria-current="page" href="/" class="router-link-active router-link-exact-active hover:underline text-white font-medium">الشروط والمتطلبات</a>
                <a aria-current="page" href="/" class="router-link-active router-link-exact-active hover:underline text-white font-medium">مساهمتنا</a>
            </nav>
        </div>
        <br/>
        <div class="block">
            <p class="text-white text-center mb-5">
                جميع الحقوق محفوظة لشركة صلة © 2025
            </p>
        </div>
    </div>
</footer>
<script src="{{url('/')}}/assets/js/header.js"></script>
<script src="{{url('/')}}/assets/js/join-form.js"></script>
<!-- Toastify JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Toastify({
            text: `<div class="flex items-center">
                    <span>{{ session('success') }}</span>
                  </div>`,
            duration: 5000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            backgroundColor: "linear-gradient(to right, #c8bd99, #8a7e5a)",
            className: "success-toast",
            stopOnFocus: true, // Prevents dismissing of toast on hover
            escapeMarkup: false, // Allows HTML in the toast
            style: {
                background: "linear-gradient(to right, #c8bd99, #8a7e5a)",
                borderRadius: "8px",
                boxShadow: "0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23)",
                padding: "12px 20px",
                fontSize: "16px",
                fontWeight: "bold",
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                direction: "rtl",
                animation: "slide-right 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both"
            }
        }).showToast();
    });
</script>
@endif

@if($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @foreach($errors->all() as $error)
            Toastify({
                text: `<div class="flex items-center">
                        <span>{{ $error }}</span>
                        <svg class="w-6 h-6 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                      </div>`,
                duration: 5000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                backgroundColor: "linear-gradient(to right, #e53e3e, #c53030)",
                className: "error-toast",
                stopOnFocus: true, // Prevents dismissing of toast on hover
                escapeMarkup: false, // Allows HTML in the toast
                style: {
                    background: "linear-gradient(to right, #e53e3e, #c53030)",
                    borderRadius: "8px",
                    boxShadow: "0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23)",
                    padding: "12px 20px",
                    fontSize: "16px",
                    fontWeight: "bold",
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    direction: "rtl",
                    animation: "slide-right 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both"
                }
            }).showToast();
        @endforeach
    });
</script>
@endif
</body>
</html>
