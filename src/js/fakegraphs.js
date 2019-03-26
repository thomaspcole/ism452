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
