@extends('layout.base')

@section('content')
    <section class="inner-top inner-top_v2">
        <div class="container">
            @include('partials.crumps', ['crumbs'=>$crumbs, 'documentObject'=>$documentObject])
            <h1>Объекты</h1>
        </div>

        <div class="dop-menu-wrapper">
            <div class="container">
                <ul class="dop-menu-list number_3">
                    <li class="dop-menu-item active"><a href="" class="dop-menu-link" style="background-image: url(theme/img/object/01.jpg)"><span class="dop-menu-title">Жилые<br>объекты</span></a></li>
                    <li class="dop-menu-item"><a href="" class="dop-menu-link" style="background-image: url(theme/img/object/02.jpg)"><span class="dop-menu-title">Производственные<br>предприятия</span></a></li>
                    <li class="dop-menu-item"><a href="" class="dop-menu-link" style="background-image: url(theme/img/object/03.jpg)"><span class="dop-menu-title">Социальные<br>объекты</span></a></li>
                </ul>
            </div>
        </div>

    </section>


    <section class="objects-section">
        <div class="container">
            <div class="objects-section-title">
                <a href="" class="btn-next">←</a>
                <a href="" class="btn-prev">→</a>
                <h2>Полиграфическое производство, п. Металлострой</h2>
            </div>

            <div class="objects-inner-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="objects-slider-wr">
                            <div class="objects-slider-bg owl-carousel">
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/01.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/02.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/03.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/04.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/07.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                            </div>

                            <div class="objects-slider-min owl-carousel">
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/01.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/02.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/03.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/04.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/07.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="objects-section_data">
                            <p class="t_blue">Заказчик:</p>
                            <p><strong>Производственное здание типографии с административно-бытовыми помещениями</strong></p>
                        </div>

                        <div class="objects-section_data">
                            <p class="t_blue">Адрес:</p>
                            <p><strong>г. Санкт-Петербург, Колпинский район, пос. Металлострой, промзона "Металлострой", дорога на Металлострой, д.12, лит. И</strong></p>
                        </div>

                        <div class="objects-section_data">
                            <p class="t_blue">Сроки реализации:</p>
                            <p><strong>2018</strong></p>
                        </div>

                        <div class="objects-section_data">
                            <p class="t_blue">Срок выполнения работ:</p>
                            <p><strong>Январь 2018 г. – Июнь 2018 г.</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabs-wrapper text-content">
                <ul class="tabs-btns">
                    <li class="tabs-btns-item active"><span>Вентиляция,<br> кондиционирование, увлажнение</span></li>
                    <li class="tabs-btns-item"><span>Холодоснабжение технологическое</span></li>
                    <li class="tabs-btns-item"><span>Автоматизация и диспетчеризация</span></li>
                    <li class="tabs-btns-item"><span>Результаты работ</span></li>
                </ul>

                <div class="tabs-content active">
                    <h2>Подробная информация об объекте</h2>


                    <div class="services-about-item">
                        <div class="about-block_name">Виды работ:</div>
                        <p>Монтаж систем вентиляции, увлажнения и кондиционирования воздуха</p>
                    </div>

                    <div class="services-about-item">
                        <div class="about-block_name">Характеристика объекта:</div>
                        <p>Площадь здания – 2600 м2;</p>
                        <p>Высота – 8,5 м;</p>
                        <p>В цехе организован участок офсетной печати по выпуску этикеток. Заказчик установил в цехе несколько современных печатных машин, а также вспомогательное технологическое оборудование.</p>
                    </div>

                    <div class="services-about-item fonts15">
                        <div class="about-block_name">Общие технологические решения:</div>
                        <div class="objects-slider-wr">
                            <div class="objects-slider-bg owl-carousel">
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/01.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/02.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/03.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/04.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/05.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/06.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/07.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/08.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/09.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/10.jpg)"></div>
                            </div>

                            <div class="objects-slider-min owl-carousel">
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/01.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/02.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/03.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/04.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/05.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/06.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/07.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/08.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/09.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/montazh_ventiljacii/10.jpg)"></div>
                            </div>
                        </div>
                        <h3>Вентиляция</h3>
                        <p><strong>1. Производственная зона</strong></p>
                        <p>В производственном цехе смонтированы общеобменные приточные и вытяжные системы вентиляции производства фирмы «SmartLuft».</p>
                        <p>Приточная установка состоит из воздушного клапана, двух фильтровальных секций разной степени очистки, водяного калорифера, секции фреонового охлаждения, секции адиабатного увлажнения и вентилятора. Вытяжная установка – из воздушного клапана с электроприводом и вентиляторной секции.</p>
                        <p>Оборудование располагается на предварительно построенной антресоли, обшитой гипсокартонными перегородками с необходимым пределом огнестойкости.</p>
                        <p>Система микроклимата обеспечивает круглогодичную температуру воздуха на уровне 21-25 °С и влажность не менее 30%.</p>
                        <p>Система вентиляции имеет несколько режимов работы в зависимости от технологических условий производства.</p>
                        <p><span>Режим с остановленным технологическим оборудованием:</span></p>
                        <p>В обычном режиме, общеобменные системы создают 4-х кратный воздухообмен с 10% подпором воздуха.</p>
                        <p>Приточный воздух, после прохождения обработки, в объёме 14 000 м3/час подаётся в верхнюю зону помещения со следующими параметрами - t=18 °С ᵠ =60%.</p>
                        <p>Вытяжной воздух удаляется из нижней и верхних зон в объёме 11 280 м3/час в пропорции 2/3 снизу и 1/3 сверху.</p>
                        <p><span>Режим с запущенным технологическим оборудованием:</span></p>
                        <p>В режиме запуска оборудования, в системе воздухообмена помещения начинают участвовать системы технологических отводов газов (СОГ). В зависимости от загруженности оборудования, расход воздуха в системах отвода (СОГ) может меняться.</p>
                        <p><strong>2. Зона установки воздушных компрессоров и азотного генератора</strong></p>
                        <p>Для технологических нужд в зоне вент.камеры смонтированы 3 высокопроизводительных воздушных компрессора фирмы «CECCATO» (2 по 55 кВт и 1 на 75 кВт).</p>
                        <p>Для обеспечения требуемых параметров и объёма воздуха для работы компрессоров, проектом предусматривается монтаж сети вытяжных воздуховодов для отвода горячего воздуха от компрессоров и монтаж 3-х приточных систем П5, П6, П7 с использованием крышных приточных вентиляторов ВПОПв.</p>
                        <p>На каждой вытяжной системе от компрессоров, предусмотрены рециркуляционые клапаны с электроприводами. В зависимости от температуры в помещении и режима работы компрессоров, система вентиляции может подавать или удалять воздух от 0 до 33 000 м3/ч. Воздух может полностью удаляться на улицу или за счёт рециркуляционных клапанов попадать в помещение (в холодный период).</p>
                        <p>Контроль температуры воздуха в зоне компрессоров осуществляется настенными температурными датчиками. Система автоматики опираясь на показания датчиков температуры в помещении и количестве возвращаемого воздуха, пропорционально снижают производительность приточных систем П5, П6, П7 для поддержания воздушного баланса.</p>
                        <p>В дополнение, в связи с возможным риском утечки азота, предусмотрен аварийный режим. По периметру помещения установлены газоанализаторы, при срабатывании которых, отключаются приточные системы вентиляции и запускается реверсивный вентилятор П7 на вытяжку.</p>

                        <h3>Кондиционирование</h3>
                        <p><strong>Производственная зона</strong></p>
                        <p>Все приточные вент. установки оснащены секциями фреоновых испарителей. На бетонной площадке, рядом с цехом, смонтированы 3 компрессорно-конденсаторных блока фирм «Hitecsa» и «Lessar» общей холодопроизводительностью 400 кВт.</p>
                        <p>Каждый ККБ и испаритель двухконтурные, что позволяет плавно регулировать подачу холода цех в зависимости от режима работы.</p>
                        <p>Центральными системами кондиционирования обеспечивается температура воздуха в цехе в диапазоне 21-25 °С при расчётной наружной температуре воздуха +30 °С.</p>
                        <p>В дополнение к центральным секциям, для локального охлаждения предусмотрены канальные кондиционеры фирмы «Lessar».</p>
                        <div class="objects-slider-wr">
                            <div class="objects-slider-bg owl-carousel">
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/01.JPG)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/02.JPG)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/03.JPG)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/04.JPG)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/05.JPG)"></div>
                            </div>

                            <div class="objects-slider-min owl-carousel">
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/01.JPG)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/02.JPG)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/03.JPG)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/04.JPG)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/uvlazhnenie/05.JPG)"></div>
                            </div>
                        </div>
                        <h3>Увлажнение</h3>
                        <p><strong>Производственная зона</strong></p>
                        <p>В целях поддержания уровня влажности в цехе на уровне не менее 30 %, предусмотрены 2 (два) типа увлажнителей.</p>
                        <p>В центральную вент. установку П3 интегрирован адиабатный сотовый увлажнитель фирмы «Fisair», производительностью до 16 л/мин, рассчитанный на насыщение влагой 37 000 м3/ч перегретого воздуха после водяного калорифера тепловой мощностью 724 кВт.</p>
                        <p>Так же по периметру цеха, на колонах, смонтированы локальные сотовые увлажнители фирмы «Fisair». Использование данных увлажнителей позволяет более точно контролировать влажность по всему производству.</p>
                    </div>

                    <div class="services-about-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="objects-slider-wr">
                                    <div class="objects-slider-bg owl-carousel">
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/01.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/02.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/03.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/04.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/05.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/06.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/07.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/08.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/09.jpg)"></div>
                                        <div class="osb-item" style="background-image:  url(theme/img/object-slider/result/10.jpg)"></div>
                                    </div>

                                    <div class="objects-slider-min owl-carousel">
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/01.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/02.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/03.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/04.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/05.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/06.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/07.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/08.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/09.jpg)"></div>
                                        <div class="osm-item" style="background-image:  url(theme/img/object-slider/result/10.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-block_name">Результаты выполненных работ:</div>
                                <p>Компанией «ЛЕГЕНДА» успешно выполнила поставленную задачу.</p>
                                <p><strong>По предварительно разработанной рабочей документации, было выполнено:</strong></p>
                                <ul>
                                    <li>Закуплены и поставлены на объект современное оборудование и материалы ведущих мировых производителей;</li>
                                    <li>Смонтированы системы вентиляции, кондиционирования и увлажнения воздуха;</li>
                                    <li>Произведены пуско-наладочные работы;</li>
                                    <li>Выполнены индивидуальные и комплексные испытания систем;</li>
                                    <li>Подготовлена и передана Заказчику исполнительная документация, инструкции по эксплуатации, паспорта на оборудование и системы, сертификаты на материалы;</li>
                                    <li>Произведено обучение технического персонала Заказчика по обслуживанию и эксплуатации смонтированных систем.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="border-top">

                        <h2>Дополнительные документы:</h2>
                        <div class="downloads-block">
                            <ul>
                                <li><a class="download-link" href="" target="_blank">Исполнительная документация по вентиляции, кондиционированию</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="tabs-content">
                    <div class="services-about-item">
                        <div class="about-block_name">Виды работ:</div>
                        <p>Монтаж систем вентиляции, увлажнения и кондиционирования воздуха</p>
                    </div>
                </div>

                <div class="tabs-content">
                    <div class="services-about-item fonts15">
                        <div class="about-block_name">Общие технологические решения:</div>
                        <div class="objects-slider-wr">
                            <div class="objects-slider-bg owl-carousel">
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/01.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/02.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/03.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/04.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/07.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osb-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                            </div>

                            <div class="objects-slider-min owl-carousel">
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/01.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/02.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/03.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/04.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/07.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/05.jpg)"></div>
                                <div class="osm-item" style="background-image:  url(theme/img/object-slider/06.jpg)"></div>
                            </div>
                        </div>

                        <h3>Кондиционирование</h3>
                        <p><strong>Производственная зона</strong></p>
                        <p>Все приточные вент. установки оснащены секциями фреоновых испарителей. На бетонной площадке, рядом с цехом, смонтированы 3 компрессорно-конденсаторных блока фирм «Hitecsa» и «Lessar» общей холодопроизводительностью 400 кВт.</p>
                        <p>Каждый ККБ и испаритель двухконтурные, что позволяет плавно регулировать подачу холода цех в зависимости от режима работы.</p>
                        <p>Центральными системами кондиционирования обеспечивается температура воздуха в цехе в диапазоне 21-25 °С при расчётной наружной температуре воздуха +30 °С.</p>
                        <p>В дополнение к центральным секциям, для локального охлаждения предусмотрены канальные кондиционеры фирмы «Lessar».</p>
                        <h3>Увлажнение</h3>
                        <p><strong>Производственная зона</strong></p>
                        <p>В целях поддержания уровня влажности в цехе на уровне не менее 30 %, предусмотрены 2 (два) типа увлажнителей.</p>
                        <p>В центральную вент. установку П3 интегрирован адиабатный сотовый увлажнитель фирмы «Fisair», производительностью до 16 л/мин, рассчитанный на насыщение влагой 37 000 м3/ч перегретого воздуха после водяного калорифера тепловой мощностью 724 кВт.</p>
                        <p>Так же по периметру цеха, на колонах, смонтированы локальные сотовые увлажнители фирмы «Fisair». Использование данных увлажнителей позволяет более точно контролировать влажность по всему производству.</p>
                    </div>
                </div>

                <div class="tabs-content">
                    4
                </div>

            </div>


        </div>
    </section>

@endsection
