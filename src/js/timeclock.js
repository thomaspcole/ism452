let tc = function(p){
  let clock;
  p.setup = function(){
    p.createCanvas(150,150);
    clock = new timeClock(p);

    //set the framerate to 1 fps
    p.frameRate(1);
  }

  p.draw = function(){
    p.background(200);
    clock.display();
  }
}

new p5(tc, 'timeclock');
