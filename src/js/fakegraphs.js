
//will dsiplay bar with percentages
class barGraph{
  constructor(p, colNames, levels, barMaxHeight, colors, percent){
    this.colNames = colNames;
    this.levels = levels;
    this.barMaxHeight = barMaxHeight;
    this.p = p;
    this.colors = colors;
    this.percent = percent;
  }

  display(){

    var colSpacing = (this.p.width/this.colNames.length);
    var offset = 20;

    //fill gray background box
    this.p.fill(150);
    this.p.rect(offset-5, offset-5, this.p.width-(offset+5), this.p.height-50,10);

    //draw text in black
    this.p.fill(0);
    for (var i = 0; i < this.colNames.length; i++) {
      this.p.textAlign(this.p.CENTER);
      this.p.text(this.colNames[i], (colSpacing*i)+offset*2.5, this.p.height-15);
    }

    //draw each bar
    for (var i = 0; i < this.levels.length; i++) {
      var curLevel = this.levels[i]/100;
      var barMaxHeight = this.barMaxHeight;
      var rectHeight = barMaxHeight*curLevel;
      var startPos = (this.p.height-40)-rectHeight;

      var perc = curLevel*100;
      if(this.percent == true){
        perc += "%";
      } else {
        perc += " ";
      }

      this.p.fill(0);
      this.p.textAlign(this.p.CENTER);
      this.p.text(perc, (colSpacing*i)+offset*2.5, startPos-3);

      if(this.colors == true){
        if(curLevel*100 > 50){
          this.p.fill(0,255,0);
        } else if (curLevel*100 > 15) {
          this.p.fill(255,255,0);
        } else {
          this.p.fill(255,0,0);
        }
      } else {
        this.p.fill(255);
      }

      this.p.rect((colSpacing*i)+offset, startPos, colSpacing*.6, rectHeight,10);
    }
  }
}

//displays a simple box with a large number in it
class numberDisplay{
  constructor(p, name, value, colors, percent){
    this.name = name;
    this.value = value;
    this.p = p;
    this.colors = colors;
    this.percent = percent;
  }

  display(){
    var offset = 20;


    //fill gray background box
    this.p.fill(150);
    this.p.rect(offset-5, offset-5, this.p.width-(offset+5), this.p.height-50,10);

    //draw text in black
    this.p.fill(0);
    this.p.textAlign(this.p.CENTER);
    this.p.text(this.name, this.p.width/2, this.p.height-15);

    this.p.textAlign(this.p.CENTER, this.p.CENTER);
    this.p.textSize(120);
    this.p.text(this.value, this.p.width/2, this.p.height/2);

  }
}

//this is not specifically a graph but I did not want to split it into its own file
class timeClock{
  constructor(p){
    this.p = p;
  }

  display(){

    var radius = this.p.width/2;
    var diameter = radius * 1.7; //sqrt pi
    var cx = this.p.width/2;
    var cy = this.p.height/2;

    var s = this.p.map(this.p.second(), 0, 60, 0, this.p.TWO_PI) - this.p.HALF_PI;
    var m = this.p.map(this.p.minute() + this.p.norm(this.p.second(), 0, 60), 0, 60, 0, this.p.TWO_PI) - this.p.HALF_PI;
    var h = this.p.map(this.p.hour() + this.p.norm(this.p.minute(), 0, 60), 0, 60, 0, this.p.TWO_PI * 2) - this.p.HALF_PI;

    //clock body
    this.p.noStroke();
    this.p.fill(0);
    this.p.ellipse(cx,cy,diameter+15, diameter+15);
    this.p.fill(255);
    this.p.ellipse(cx, cy, diameter, diameter);

    //5 minute tick marks
    this.p.stroke(0);
    this.p.strokeWeight(3);
    this.p.beginShape(this.p.POINTS);
    for (var i = 0; i < 360; i+= 30) {
      var angle = this.p.radians(i);
      var x = cx+this.p.cos(angle) * radius * .8;
      var y = cy+this.p.sin(angle) * radius * .8;
      this.p.vertex(x,y);
    }
    this.p.endShape();
    this.p.strokeWeight(1);

    //hands
    this.p.fill(0);
    //second
    this.p.line(cx, cy, cx + (this.p.cos(s) * radius * .8) , cy + (this.p.sin(s) * radius * .8));
    //minute
    this.p.strokeWeight(2);
    this.p.line(cx, cy, cx + (this.p.cos(m) * radius * .8), cy + (this.p.sin(m) * radius * .8));
    //hour
    this.p.strokeWeight(3);
    this.p.line(cx, cy, cx + (this.p.cos(h) * radius * .6), cy + (this.p.sin(h) * radius * .6));

    //cover center dot
    this.p.strokeWeight(1);
    this.p.fill(0);
    this.p.ellipse(cx,cy,5,5);
  }
}
