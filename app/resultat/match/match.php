<?php echo 
'<div *ngFor="let equip of result|async" class="matchi">


                <div class="form">
                    <a routerLink="/stat/equipe/{{equip?.equipe1?.id}}">
                    <div class="box1">
                        <div class="nomequipe1"><h3>{{equip?.equipe1?.nom}}</h3></div>
                        <div class="logo1">
                            <img class="jolieimage" src="/images/{{equip?.equipe1?.banniere}}"/>
                            
                        </div>
                    </div>
                    </a>
                    <div class="score">
                        {{(isjouer)?equip?.but1:''}}
                        <b *ngIf="!isjouer">|</b>
                    </div>
                    <div class="vs">VS</div>
                    <div class="score">
                        {{(isjouer)?equip?.but2:''}}
                        <b *ngIf="!isjouer">|</b>
                    </div>
                    <a routerLink="/stat/equipe/{{equip?.equipe2?.id}}">
                        <div class="box2">
                            <div class="nomequipe2"><h3>{{equip?.equipe2?.nom}}</h3></div>
                            <div class="logo2">
                                <img class="jolieimage" src="/images/{{equip?.equipe2?.banniere}}"/>
                            </div>
                        </div>
                    </a>
                </div>


         

</div>'
echo '<style type="text/css">';
echo         include('match.css');
echo '</style>'?>