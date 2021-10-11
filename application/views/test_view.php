<div id="content">
            <p style="font-weight: bolder;">СевГУ</p>
            <p>ИС</p>
            <p>
                <form onsubmit="checkform(this)">
                    Выберите свою группу
                    <select>
                        <optgroup label="Четкие">
                            <option value="c1">ИСб-18-1-з</option>
                        </optgroup>
                        <optgroup label="Нечеткие">
                            <option value="s1">ИСб-18-2-з</option>
                            <option value="s2">ИСб-18-3-з</option>
                            <option value="s3">ИСб-18-4-з</option>
                        </optgroup>
                    </select>
                    <br>
                    Напишите свое ФИО <input type="text" id="FIO">
                    <br>
                    <input type="submit" value="Отправить">
                </form>
                <form onsubmit="check_for_numbs()">
                    <p>
                        Сколько будет 2+2
                        Ответ: 2 <INPUT NAME="POL" TYPE= Checkbox VALUE="2">
                        Ответ: 3 <INPUT NAME="POL" TYPE= Checkbox VALUE="3">
                        Ответ: 4 <INPUT NAME="POL" TYPE= Checkbox VALUE="4">
                    </p>
                    <p>
                        Выберите четное число<select>
                            <optgroup label="Нечетные">
                                <option value="c1">1</option>
                                <option value="c2">3</option>
                                <option value="c3">5</option>
                            </optgroup>
                            <optgroup label="Четные">
                                <option value="s1">2</option>
                                <option value="s2">4</option>
                                <option value="s3">6</option>
                                <option value="s3">8</option>
                            </optgroup>
                        </select>
                    </p>
                    <p>

                    </p>
                    <p>
                        Что такое хорошо?<input type="text" value="Здеь писать ответ" id='answer3'>
                    </p>
                    <p><input type="reset"></p>
                    <input type="submit" value="Отправить">
                </form>
</div>