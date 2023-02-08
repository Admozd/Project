<div class="opinion">
                    <form method="POST" action="PHP/form_Opinion.php">
                        <p>
                            
                            Оставьте, пожалуйста, отзыв! <br>
                            <br>
                            <b>Какую оценку поставите нашему сервису?</b><br>
                                <input type="radio" name = "rating" required="" value="5"> 5 <br>
                                <input type="radio" name = "rating" value="4"> 4 <br>
                                <input type="radio" name = "rating" value="3"> 3 <br>
                                <input type="radio" name = "rating" value="2"> 2 <br>
                                <input type="radio" name = "rating" value="1"> 1 <br>
                                
                                <input type="button" value="Добавить" onclick="add()" class="btSize">
                                <input type="button" value="Удалить" onclick="del()" class="btSize"> <br>
                                
                                <div id="2">
                                    <div id="1">
                                        <br>
                                        <input type="submit" name="enter" value="отправить" onclick=results_1(this.form)>
                                        <input type="reset" value="очистить">
                                    </div>
                                    
                                </div>

                                
                                
                                      
                                    
                        </p>
                    </form>
                </div>
            


<script src = 'js/dom.js'></script>