<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'title' => 'Охота на вредоносные npm-пакеты',
                    'description' => 'На прошлой неделе мы рассказывали о том, как в реестре npm обнаружили несколько десятков пакетов, которые воруют данные из переменных окружения. Случилось это в начале августа и вызвало волну интереса к безопасности npm-пакетов. ',
                    'content' => 'а прошлой неделе мы рассказывали о том, как в реестре npm обнаружили несколько десятков пакетов, которые воруют данные из переменных окружения. Случилось это в начале августа и вызвало волну интереса к безопасности npm-пакетов. В комментариях к предыдущему материалу совершенно справедливо отмечено, что проблема неблагонадёжных пакетов существует со дня появления пакетных менеджеров, что, хотя сейчас всё более или менее спокойно, никто не застрахован от проблем самого разного масштаба. Например, вредоносный код, внедрённый в очередное обновление какого-нибудь популярнейшего пакета, способен вызвать настоящую катастрофу. Поиск опасных пакетов — дело непростое, к нему подходят с разных сторон. Сегодня мы хотим поделиться с вами рассказом о том, как в Duo Labs устроили охоту на вредоносные npm-пакеты.
',
                    'alias' => 'test',
                    'public' => 'true'
                ],
                [   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'title' => 'Новые инструменты Safari для отладки WebRTC',
                    'description' => 'Совсем недавно Apple анонсировала поддержку WebRTC в Safari. Слухи ходили несколько лет, и теперь мы знаем: осенью WebRTC будет доступна для всех основных браузерах: Chrome, Firefox, Safari и Edge. С подводными камнями и несовместимостями. Технология очень крутая и позволяет передавать peer-to-peer между браузерами голос, видео, экран или произвольные данные. Ее использу',
                    'content' => 'Поддержка обеих версий API

За последние несколько лет API WebRTC полностью поменялся: старый вариант на коллбеках и с медиа потоками был объявлен устаревшим, а вместо него создателям браузеров предлагают сделать новый, на промисах и с медиа треками. Firefox полностью поддерживает как старый так и новый API, у Chrome пока не реализована часть методов по работе с меди треками. А разработчики Safari выбрали интересное решение: браузер поддерживает оба API, но в версии для конечных пользователей будет доступно только новое. А старое можно для отладки включить через специальное меню:',
                    'alias' => 'test2',
                    'public' => 'true'
                ],
                [
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'title' => 'Карусель на Vanilla.JS',
                    'description' => 'Прочитав эту статью решил запилить свою карусель с блэк-джеком и jQuery хотя нет, без него ибо 2017 год и он не особо и нужен. Создадим функцию, которая принимает объект с параметрами, и делает слайдер. Некоторые моменты будут опущены, такие, как: вендорные префиксы, таймер смены и т.д.
Первое что мы сделаем — разметка для карусели, на классах, а не id, дабы можно было использовать несколько раз один и тот же модуль на странице, ну и специфичность не была 3-его порядка.',
                    'content' => 'Прочитав эту статью решил запилить свою карусель с блэк-джеком и jQuery хотя нет, без него ибо 2017 год и он не особо и нужен. Создадим функцию, которая принимает объект с параметрами, и делает слайдер. Некоторые моменты будут опущены, такие, как: вендорные префиксы, таймер смены и т.д.
Первое что мы сделаем — разметка для карусели, на классах, а не id, дабы можно было использовать несколько раз один и тот же модуль на странице, ну и специфичность не была 3-его порядка.',
                    'alias' => 'test3',
                    'public' => 'true'
                ]
            )
        );
    }
}
