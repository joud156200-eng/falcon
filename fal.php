<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>جدول التزام أكتوبر – ديسمبر</title>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
<style>
:root{--bg:#EDF5ED;--card:#fff;--ink:#13301A;--mute:#5B7A61;--line:#D0E3D2;--main:#2E8B46;--on:#fff;--gold:#1E5E2F;--h0:#DAEBDC;
box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}
@media (prefers-color-scheme:dark){:root:not([data-theme="light"]){--bg:#0D1A10;--card:#14261A;--ink:#E2F1E4;--mute:#8CAB92;--line:#25402B;--main:#4CC46A;--on:#0D1A10;--gold:#9BE0AA;--h0:#1E3323}}
:root[data-theme="dark"]{--bg:#0D1A10;--card:#14261A;--ink:#E2F1E4;--mute:#8CAB92;--line:#25402B;--main:#4CC46A;--on:#0D1A10;--gold:#9BE0AA;--h0:#1E3323}
*{box-sizing:border-box}
html{scroll-padding-top:env(safe-area-inset-top,0px)}
body{margin:0;background:var(--bg);color:var(--ink);font-family:"IBM Plex Sans Arabic",system-ui,sans-serif;line-height:1.6}
main{max-width:520px;margin:0 auto;padding:20px 16px 40px}
h1{font-size:26px;margin:0 0 4px;font-weight:700}
.sub{color:var(--mute);margin:0 0 14px;font-size:15px}
.bar{height:10px;background:var(--h0);border-radius:6px;overflow:hidden}
.bar i{display:block;height:100%;background:var(--main);width:0;transition:width .3s}
.card{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:14px;margin-top:16px}
.nav{display:flex;align-items:center;justify-content:space-between;margin-bottom:8px}
.nav b{font-size:18px}
button{font:inherit;color:inherit;cursor:pointer}
.arr{width:40px;height:40px;border-radius:50%;border:1px solid var(--line);background:none;font-size:18px}
.arr:disabled{opacity:.3;cursor:default}
.h{display:flex;align-items:center;gap:12px;padding:10px 0;border-top:1px solid var(--line)}
.h:first-of-type{border-top:0}
.chk{width:32px;height:32px;border-radius:9px;border:2px solid var(--main);background:none;flex:none;display:grid;place-items:center;color:var(--on);font-size:18px;font-weight:700}
.chk.on{background:var(--main)}
.nm{flex:1;font-size:16px}
.st{font-size:13px;color:var(--gold);font-weight:600;white-space:nowrap}
.rm{background:none;border:0;color:var(--mute);font-size:20px;padding:4px 8px}
.add{display:flex;gap:8px;margin-top:10px}
.add input{flex:1;min-width:0;font:inherit;padding:10px 12px;border-radius:10px;border:1px solid var(--line);background:var(--bg);color:var(--ink)}
.add button{padding:10px 16px;border-radius:10px;border:0;background:var(--main);color:var(--on);font-weight:600}
h2{font-size:17px;margin:0 0 10px}
.grid{display:grid;grid-template-columns:repeat(10,1fr);gap:5px}
.c{aspect-ratio:1;border-radius:6px;border:2px solid transparent;background:var(--h0);padding:0;font-size:10px;color:var(--mute)}
.c[data-l="1"]{background:color-mix(in srgb,var(--main) 35%,var(--h0))}
.c[data-l="2"]{background:color-mix(in srgb,var(--main) 65%,var(--h0))}
.c[data-l="3"]{background:var(--main);color:var(--on)}
.c.sel{border-color:var(--gold)}
.c.fut{opacity:.45}
.legend{color:var(--mute);font-size:13px;margin:10px 0 0}
.kp{display:flex;gap:10px}.k{flex:1;background:var(--bg);border-radius:10px;padding:10px;text-align:center}.k b{display:block;font-size:20px}.k span{font-size:13px;color:var(--mute)}
h3{font-size:15px;margin:18px 0 6px}
.rw{padding:6px 0}.rt{display:flex;justify-content:space-between;gap:8px;font-size:14px}.rn{color:var(--mute);font-size:12px;white-space:nowrap}
.rb{height:6px;background:var(--h0);border-radius:4px;overflow:hidden;margin-top:4px}.rb i{display:block;height:100%;background:var(--main)}
summary{cursor:pointer;margin-top:16px;font-weight:600}
.qt{margin:0 0 10px;padding:10px 12px;border-radius:10px;background:var(--bg);color:var(--gold);font-weight:600;font-size:15px}
.sb{flex:none;font-size:12px;border:1px solid var(--line);background:none;border-radius:8px;padding:4px 8px;color:var(--mute)}
.h.sk .nm{opacity:.5;text-decoration:line-through}
.reset{margin-top:18px;background:none;border:0;color:var(--mute);text-decoration:underline;font-size:14px}
button:focus-visible,input:focus-visible{outline:3px solid var(--gold);outline-offset:2px}
</style>
</head>
<body>
<main>
<h1>التزام ١ أكتوبر – ٣١ ديسمبر</h1>
<p class="sub" id="sub"></p>
<div class="bar"><i id="bar"></i></div>

<div class="card">
  <div class="nav">
    <button class="arr" id="nx" aria-label="اليوم التالي">›</button>
    <b id="dl"></b>
    <button class="arr" id="pv" aria-label="اليوم السابق">‹</button>
  </div>
  <p class="qt" id="qt"></p>
  <div id="list"></div>
  <div class="add"><input id="in" placeholder="أضف عادة جديدة" maxlength="40"><button id="ad">أضف</button></div>
  <p class="legend">«مو اليوم» يشيلها من حساب هذا اليوم بس، و× يحذفها نهائي.</p>
</div>

<div class="card">
  <h2>خريطة الـ ٩٢ يوم</h2>
  <div class="grid" id="grid"></div>
  <p class="legend">كل ما زاد اللون زاد التزامك في ذاك اليوم. اضغط على أي يوم لتعديله.</p>
</div>

<div class="card"><h2>التقرير</h2><div id="rep"></div></div>

<button class="reset" id="rs">ابدأ من جديد</button>
</main>
<script>
var KEY="commit92", N=92, DAY=86400000;
var S=null;
function load(){try{var r=localStorage.getItem(KEY);if(r)S=JSON.parse(r)}catch(e){}}
function save(){try{localStorage.setItem(KEY,JSON.stringify(S))}catch(e){}}
function fresh(){var d=new Date(2026,9,1);
 S={start:d.getTime(),next:20,habits:[{id:1,name:"أقوم الساعة ٩"},{id:2,name:"أقرأ وجه من القرآن"},{id:3,name:"أذكار الصباح"},{id:4,name:"أسوي فطور"},{id:5,name:"أتمرن"},{id:6,name:"أحط كريم"},{id:7,name:"صلاة الظهر"},{id:8,name:"الغداء"},{id:9,name:"راحة الظهر"},{id:10,name:"صلاة العصر"},{id:11,name:"أذكار المساء"},{id:12,name:"قهوة العصر"},{id:13,name:"صلاة المغرب"},{id:14,name:"مشي على السير"},{id:15,name:"صلاة العشاء"},{id:16,name:"العشاء"},{id:17,name:"أحط كريم (الليل)"},{id:18,name:"أنام"},{id:19,name:"الماء ٨ أكواب",water:true}],done:{},water:{},skip:{}}}
load(); if(!S||!S.habits) fresh(); if(!S.water)S.water={};if(!S.skip)S.skip={};
if(!S.v3){S.v3=1;if(!S.habits.some(function(h){return h.id===20})){var k=S.habits.findIndex(function(h){return h.name==="مشي على السير"});S.habits.splice(k>-1?k+1:S.habits.length,0,{id:20,name:"أقفل ١٠ آلاف خطوة"});if(S.next<21)S.next=21}}
var sel=0;
var Q=["البداية أصعب خطوة، وأنت خطيتها اليوم.", "ما تحتاج تكون مثالي، تحتاج بس تكمل.", "خطوة صغيرة اليوم أفضل من خطة كبيرة بكرة.", "التزامك اليوم هدية لنفسك بعد ثلاثة شهور.", "كل علامة صح تقول لك: أنا أقدر.", "الانضباط يبني ثقتك بنفسك يوم بعد يوم.", "أسبوع كامل! عادتك بدت تاخذ مكانها.", "لو تعبت خفف الوتيرة، بس لا توقف.", "أنت أقوى من كسل اللحظة.", "عشرة أيام من الالتزام، فخور فيك.", "التكرار هو سر التغيير.", "لا تقارن نفسك بغيرك، قارن نفسك بأمس.", "يومك الحلو يبدأ من أول عادة تسويها.", "أسبوعين! والنتيجة تبان لمن يستمر.", "خلّ روتينك صديقك، مو عبء عليك.", "اللي يبدأ يومه بنظام يكمله براحة.", "ما فيه يوم ضايع إذا سويت فيه شي يفيدك.", "جسمك وعقلك يشكرونك على هالاهتمام.", "كل يوم تكمله يقربك من نسختك الأفضل.", "عشرين يوم! أنت تصنع عادة حقيقية.", "ثلاثة أسابيع من الثبات، استمر.", "لو فاتك شي أمس، اليوم فرصة جديدة.", "الصبر على البداية يثمر في النهاية.", "خلك ثابت، والنتائج تجي مع الوقت.", "ربع الطريق وراك، لا تلتفت.", "الهدوء والاستمرار أقوى من الحماس المؤقت.", "اسأل نفسك: أي نسخة أبغى أكون؟ وسوّ اللي يوصلك لها.", "قربت من شهر كامل، إنجاز يستاهل الفخر.", "أنت تثبت لنفسك إنك تقدر.", "ثلاثين يوم، والعادة صارت جزء منك.", "شهر كامل خلص، وأنت تستحق التقدير.", "شهر جديد وحماس جديد، كمّل بنفس القوة.", "نوفمبر بدأ وأنت أقوى من أول.", "العادة اللي تكررها تصير طبيعة.", "لا تنتظر الدافع، ابدأ ويجيك.", "كل يوم تلتزم فيه يبني احترامك لنفسك.", "خطوة ثابتة أفضل من قفزة متعثرة.", "تذكر ليش بدأت، وكمّل عشانه.", "التعب يمر، والإنجاز يبقى.", "أربعين يوم! رقم يستاهل وقفة فخر.", "أنت اليوم أكثر انضباطاً من قبل شهر.", "لا تخلي يوم عادي يكسر سلسلتك.", "القوة الحقيقية في الاستمرار وقت الملل.", "كل كوب ماء وكل خطوة لها قيمتها.", "اقتربت من نص الرحلة، كمّل.", "وصلت نص الطريق! الباقي أسهل مما تتخيل.", "اللي يصبر على الروتين يجني ثمرته.", "لا تستعجل النتائج، الجسم يحتاج وقت.", "هذا الأسبوع يقدر يكون أفضل أسبوع لك.", "خمسين يوم من الإصرار، ما شاء الله عليك.", "كل صباح فرصة تبدأ فيها بنظام.", "ما يحتاج تكون كامل، يكفي تكون مستمر.", "صحتك أغلى استثمار، وأنت تستثمر فيها كل يوم.", "التزامك اليوم يريّح غدك.", "لا تخلي الأعذار تكسب اليوم.", "عادتك صارت أقوى من أول، حسّ فيها.", "اقفل يومك بإنجاز يخليك تنام مرتاح.", "الثبات صفة الكبار، وأنت منهم.", "قريب تلمس الفرق بنفسك.", "ستين يوم! كثير ما وصلوا لها.", "آخر نوفمبر، شهرين كاملين وراك.", "ديسمبر بدأ والنهاية قريبة، كمّل.", "باقي شهر تقريباً على خط النهاية.", "لا تخفف السرعة وأنت قريب من الهدف.", "كل يوم الحين له قيمة مضاعفة.", "اللي بدأ بقوة وكمّل بصبر يوصل.", "شوف كم تغيرت من أول يوم.", "روتينك هو اللي يحملك وقت ما تقل الطاقة.", "عاداتك صارت هويتك، مو مجرد جدول.", "سبعين يوم من الالتزام، شي يفتخر فيه.", "اليوم فرصة تثبت فيها إنك ما تتراجع.", "لا تنسى تكافئ نفسك على اللي أنجزته.", "التعب المؤقت أرحم من الندم الطويل.", "أنت أقوى من أي يوم ثقيل.", "باقي أقل من ثلاثة أسابيع، ركّز.", "كل عادة تكملها اليوم تقول لك: أنا ملتزم.", "الاستمرارية أجمل من الكمال.", "قوتك في هدوئك وإصرارك.", "لا تخلي آخر الطريق يضيّع تعبك.", "ثمانين يوم! أنت صرت شخص مختلف.", "قربت، وكل يوم يقربك أكثر.", "اللي وصل هنا ما يوقف الحين.", "اشكر نفسك على كل يوم التزمت فيه.", "بقي أقل من عشرة أيام على خط النهاية.", "اعرف قيمة اللي بنيته، وحافظ عليه.", "كل يوم الحين يختم إنجازك.", "الخطوات الأخيرة تثبت إنك تقدر.", "باقي أربعة أيام، لا تتوقف.", "ثلاثة أيام بس، لا تفرّط فيها.", "يومين ونحتفل بإنجازك.", "بكرة آخر يوم، اختمها بقوة.", "آخر يوم! ثلاثة شهور من الالتزام، مبروك عليك."];
function ar(n){return Number(n).toLocaleString("ar-EG")}
function todayIdx(){var d=new Date();d.setHours(0,0,0,0);return Math.round((d.getTime()-S.start)/DAY)}
function dateOf(i){return new Date(S.start+i*DAY).toLocaleDateString("ar-SA-u-ca-gregory-nu-arab",{weekday:"long",day:"numeric",month:"long"})}
function sk(i,id){return (S.skip[i]||[]).indexOf(id)>-1}
function has(i,id){var h=S.habits.filter(function(x){return x.id===id})[0];if(h&&h.water)return (S.water[i]||0)>=8;return (S.done[i]||[]).indexOf(id)>-1}
function streak(id,t){var c=0,first=true;for(var i=Math.min(t,N-1);i>=0;i--){if(sk(i,id))continue;if(has(i,id))c++;else if(!first)break;first=false}return c}
function level(i){var A=S.habits.filter(function(h){return !sk(i,h.id)});var n=A.length;if(!n)return 0;var f=A.filter(function(h){return has(i,h.id)}).length/n;return f===0?0:f<.5?1:f<1?2:3}
function toggle(id){if(sel>todayIdx())return;var a=S.done[sel]||[];var k=a.indexOf(id);if(k>-1)a.splice(k,1);else a.push(id);S.done[sel]=a;save();render()}
function skipToggle(id){if(sel>todayIdx())return;var a=S.skip[sel]||[];var k=a.indexOf(id);
 if(k>-1)a.splice(k,1);else{a.push(id);var d=S.done[sel]||[];var m=d.indexOf(id);if(m>-1)d.splice(m,1);S.water[sel]=0}
 S.skip[sel]=a;save();render()}
function render(){
 var t=todayIdx();
  if(sel>Math.min(t,N-1))sel=Math.max(0,Math.min(t,N-1));
 var cur=Math.min(t,N-1);
 var total=0;for(var i=0;i<N;i++)if(level(i)===3)total++;
 document.getElementById("sub").textContent=t<0?"يبدأ يوم ١ أكتوبر · باقي "+ar(-t)+" يوم":t>=N?"خلصت الـ ٩٠ يوم! أيام الالتزام الكامل: "+ar(total):"اليوم "+ar(cur+1)+" من ٩٢ · أيام الالتزام الكامل: "+ar(total);
 document.getElementById("bar").style.width=(Math.max(0,cur+1)/N*100)+"%";
 document.getElementById("dl").textContent="يوم "+ar(sel+1)+" · "+dateOf(sel);
 document.getElementById("qt").textContent=Q[sel]||"";
 document.getElementById("pv").disabled=sel<=0;
 document.getElementById("nx").disabled=sel>=cur;
 var L=document.getElementById("list");L.textContent="";
 if(!S.habits.length){var e=document.createElement("p");e.className="sub";e.textContent="ما عندك عادات. أضف أول عادة تحت.";L.appendChild(e)}
 S.habits.forEach(function(h){
  var isk=sk(sel,h.id);var r=document.createElement("div");r.className="h"+(isk?" sk":"");
  var b=document.createElement("button");b.className="chk"+(has(sel,h.id)?" on":"");b.textContent=has(sel,h.id)?"✓":"";
  b.setAttribute("aria-label",h.name);b.onclick=function(){toggle(h.id)};
  var n=document.createElement("span");n.className="nm";n.textContent=h.name;
  var s=document.createElement("span");s.className="st";var k=streak(h.id,cur);s.textContent=k>0?ar(k)+" 🔥":"";
  var x=document.createElement("button");x.className="rm";x.textContent="×";x.setAttribute("aria-label","احذف "+h.name);
  x.onclick=function(){if(confirm("تحذف «"+h.name+"»؟")){S.habits=S.habits.filter(function(z){return z.id!==h.id});save();render()}};
  var kb=mk("button","sb",isk?"رجّعها":"مو اليوم");kb.onclick=function(){skipToggle(h.id)};
  if(h.water){r.style.flexWrap="wrap";r.appendChild(n);r.appendChild(s);r.appendChild(kb);r.appendChild(x);
  var w=document.createElement("div");w.style.cssText="display:flex;gap:6px;width:100%;flex-wrap:wrap";var cnt=S.water[sel]||0;
  for(var q=1;q<=8;q++){(function(q){var cb=document.createElement("button");cb.className="chk"+(q<=cnt?" on":"");cb.textContent=ar(q);cb.style.fontSize="13px";cb.setAttribute("aria-label","كوب "+q);
   cb.onclick=function(){if(sel>todayIdx())return;S.water[sel]=(S.water[sel]===q)?q-1:q;save();render()};w.appendChild(cb)})(q)}
  if(!isk)r.appendChild(w)}else{if(isk){b.textContent="—";b.disabled=true;b.style.borderStyle="dashed";b.style.color="var(--mute)"}r.appendChild(b);r.appendChild(n);r.appendChild(s);r.appendChild(kb);r.appendChild(x)}
  L.appendChild(r)});
 var G=document.getElementById("grid");G.textContent="";
 for(var j=0;j<N;j++){(function(j){
  var c=document.createElement("button");c.className="c"+(j===sel?" sel":"")+(j>cur?" fut":"");
  c.dataset.l=level(j);c.textContent=ar(j+1);c.disabled=j>cur;
  c.setAttribute("aria-label","يوم "+(j+1));
  c.onclick=function(){sel=j;render()};G.appendChild(c)})(j)}
 report()
}
function mk(t,c,x){var e=document.createElement(t);if(c)e.className=c;if(x!==undefined)e.textContent=x;return e}
function pc(x){return ar(Math.round(x*100))+"٪"}
function row(P,l,f,note,fn){var r=mk("div","rw");var t=mk("div","rt");t.appendChild(mk("span","",l));t.appendChild(mk("span","rn",note));r.appendChild(t);var b=mk("div","rb");var i=mk("i");i.style.width=Math.round(f*100)+"%";b.appendChild(i);r.appendChild(b);if(fn){r.onclick=fn;r.style.cursor="pointer"}P.appendChild(r)}
function bestRun(id,el){var b=0,c=0;for(var i=0;i<el;i++){if(sk(i,id))continue;if(has(i,id)){c++;if(c>b)b=c}else c=0}return b}
function report(){
 var B=document.getElementById("rep");B.textContent="";
 var el=Math.min(todayIdx(),N-1)+1,H=S.habits,n=H.length;
 if(el<=0||!n){B.appendChild(mk("p","sub",el<=0?"التقرير يطلع من ١ أكتوبر.":"أضف عادات عشان يطلع التقرير."));return}
 var tot=0,den=0,full=0,pd=[],nd=[];
 for(var i=0;i<el;i++){var A=H.filter(function(h){return !sk(i,h.id)});var d=A.filter(function(h){return has(i,h.id)}).length;pd.push(d);nd.push(A.length);tot+=d;den+=A.length;if(A.length&&d===A.length)full++}
 var top=mk("div","kp");
 [[ar(full)+" من "+ar(el),"أيام التزام كامل"],[pc(den?tot/den:0),"متوسط الالتزام"]].forEach(function(k){var b=mk("div","k");b.appendChild(mk("b","",k[0]));b.appendChild(mk("span","",k[1]));top.appendChild(b)});
 B.appendChild(top);
 B.appendChild(mk("h3","","حسب الشهر"));
 [["أكتوبر",0,31],["نوفمبر",31,30],["ديسمبر",61,31]].forEach(function(m){if(el<=m[1])return;var e=Math.min(el,m[1]+m[2]),s=0,dn=0;for(var i=m[1];i<e;i++){s+=pd[i];dn+=nd[i]}var f=dn?s/dn:0;row(B,m[0],f,pc(f)+" · "+ar(e-m[1])+" يوم")});
 B.appendChild(mk("h3","","حسب العادة"));
 H.forEach(function(h){var c=0,a=0;for(var i=0;i<el;i++){if(sk(i,h.id))continue;a++;if(has(i,h.id))c++}var f=a?c/a:0;row(B,h.name,f,pc(f)+" · "+ar(c)+"/"+ar(a)+" · أطول سلسلة "+ar(bestRun(h.id,el)))});
 var dt=mk("details");dt.appendChild(mk("summary","","كل يوم بالتفصيل"));
 for(var j=el-1;j>=0;j--){(function(j){row(dt,dateOf(j),nd[j]?pd[j]/nd[j]:0,ar(pd[j])+"/"+ar(nd[j]),function(){sel=j;render();window.scrollTo(0,0)})})(j)}
 B.appendChild(dt)
}
document.getElementById("pv").onclick=function(){if(sel>0){sel--;render()}};
document.getElementById("nx").onclick=function(){sel++;render()};
function addHabit(){var i=document.getElementById("in"),v=i.value.trim();if(!v)return;S.habits.push({id:S.next++,name:v});i.value="";save();render()}
document.getElementById("ad").onclick=addHabit;
document.getElementById("in").onkeydown=function(e){if(e.key==="Enter")addHabit()};
document.getElementById("rs").onclick=function(){if(confirm("تبدأ من جديد؟ بيتم مسح كل تقدمك.")){fresh();S.v3=1;S.habits.splice(14,0,{id:20,name:"أقفل ١٠ آلاف خطوة"});S.next=21;sel=0;save();render()}};
sel=Math.max(0,Math.min(todayIdx(),N-1));
save();render();
</script>
</body>
</html>
