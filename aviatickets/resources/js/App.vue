<template>
    <header class="bg-gray-900 mb-4">
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap justify-center py-3 mb-4">
                <a href="/" class="flex items-center mb-3 md:mb-0 md:me-auto text-gray-900 text-decoration-none">
                    <svg class="bi me-2" width="32" height="32" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect y="0.196442" width="34.3148" height="34" fill="url(#pattern0)"/>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_165_50" transform="scale(0.00917431 0.00925926)"/>
                            </pattern>
                            <image id="image0_165_50" width="109" height="108" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                    <span class="fs-4 text-white fw-bold">Aviatickets</span>
                </a>
                <ul class="flex flex-wrap list-none pl-0 mb-0 ">
                    <li class=""><a href="#" class="inline-block py-2 px-4 no-underline text-white fw-bold">О нас</a></li>
                    <li class=""><a href="#" class="inline-block py-2 px-4 no-underline text-white fw-bold">Ваши заказы</a></li>
                    <li class=""><a href="#" class="inline-block py-2 px-4 no-underline text-white fw-bold">Контакты</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container mx-auto sm:px-4 min-vh-100">
        <div class="pricing-header p-6 md:pb-6 mx-auto text-center">
            <h1 class="text-4xl fw-normal">Покупка дешевых авиабилетов</h1>
        </div>
        <form action="" class="needs-validation">
            <div class="flex flex-wrap  g-4">
                <div class="sm:w-1/3 pr-4 pl-4 ps-0">
                    <label for="from" class="form-label">Откуда</label>
                    <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="from" placeholder="" value="" required="">
                </div>
                <div class="sm:w-1/3 pr-4 pl-4">
                    <label for="to" class="form-label">Куда</label>
                    <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="to" placeholder="" value="" required="">
                </div>
                <div class="sm:w-1/5 pr-4 pl-4">
                    <label for="startDate" class="form-label">Дата</label>
                    <input type="date" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="startDate" placeholder="" value="" required="">
                </div>
                <div class="sm:w-1/5 pr-4 pl-4 pe-0">
                    <label for="count" class="form-label">Пассажиры</label>
                    <input type="number" id="count" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" />
                </div>
                <div class="px-5">
                    <button class="w-full inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-blue-600 text-white hover:bg-blue-600 py-3 px-4 leading-tight text-xl" type="submit">Найти билеты</button>
                </div>
            </div>
        </form>
    </div>
    <footer class="pt-2 md:mt-2 md:pt-2 border-t bg-gray-900">
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap ">
                <div class="w-1/4 relative md:flex-grow md:flex-1">
                    <ul class="list-unstyled text-small">
                        <li class="">
                            <svg class="bi" width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect y="0.196442" width="34.3148" height="34" fill="url(#pattern0)"/>
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_165_50" transform="scale(0.00917431 0.00925926)"/>
                                    </pattern>
                                    <image id="image0_165_50" width="109" height="108" xlink:href="data:image/png;base64,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"/>
                                </defs>
                            </svg>
                            <span class="text-white fw-bold">Aviatickets</span>
                        </li>
                    </ul>
                </div>
                <div class="w-1/4 relative md:flex-grow md:flex-1">
                    <ul class="list-unstyled text-small">
                        <li class=""><a href="#" class="inline-block py-2 px-4 no-underline text-white fw-bold">Контакты</a></li>
                    </ul>
                </div>
                <div class="w-1/4 relative md:flex-grow md:flex-1">
                    <ul class="list-unstyled text-small">
                        <li class=""><a href="#" class="inline-block py-2 px-4 no-underline text-white fw-bold">О нас</a></li>
                    </ul>
                </div>
                <div class="w-1/4 relative md:flex-grow md:flex-1">
                    <ul class="list-unstyled text-small">
                        <li class=""><a href="#" class="inline-block py-2 px-4 no-underline text-white fw-bold">Для клиентов</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>


<script>
export default {
    setup() {

    }
}
</script>
