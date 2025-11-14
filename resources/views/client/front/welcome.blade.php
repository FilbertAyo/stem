@extends('layouts.landing')

@section('title', config('app.name') . ' | Home')
@section('page', 'home')

@section('content')
<main>
    <!-- ===== Hero Start ===== -->
    <section class="gj do ir hj sp jr i pg">
      <!-- Hero Images -->
      <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
        <img src="{{ asset('images/shape-04.svg') }}" alt="shape" class="h q r" />
        <model-viewer
          src="{{ asset('images/heart.glb') }}"
          alt="Interactive heart model"
          auto-rotate
          camera-controls
          touch-action="pan-y"
          shadow-intensity="1"
          class="h q r"
          style="width: 100%; height: 100%; min-height: 420px;"
        ></model-viewer>

        @once
          @push('scripts')
            <script
              type="module"
              src="https://unpkg.com/@google/model-viewer@3.3.0/dist/model-viewer.min.js"
            ></script>
          @endpush
        @endonce
      </div>

      <!-- Hero Content -->
      <div class="bb ze ki xn 2xl:ud-px-0">
        <div class="tc _o">
          <div class="animate_left jn/2">
            <h1 class="fk vj zp or kk wm wb">Immersive STEM labs designed for every girl in Tanzania.</h1>
            <p class="fq">
              Adilisha STEM Lab delivers browser-based and headset VR experiences that let learners practice real science,
              explore cutting-edge technology, and build confidence without needing physical equipment.
            </p>

            <div class="tc tf yo zf mb">
              <a href="#!" class="ek jk lk gh gi hi rg ml il vc _d _l">Explore the Lab</a>

              <span class="tc sf">
                <a href="#!" class="inline-block ek xj kk wm"> Call us +255 689 780 000 </a>
                <span class="inline-block">Let’s co-create the future of STEM education</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Hero End ===== -->

    <!-- ===== Small Features Start ===== -->
    <section id="features">
      <div class="bb ze ki yn 2xl:ud-px-12.5">
        <div class="tc uf zo xf ap zf bp mq">
          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg mh">
              <img src="{{ asset('images/icon-01.svg') }}" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">Immersive VR Experiments</h4>
              <p>Bring biology, chemistry, physics and aviation concepts to life through interactive simulations.</p>
            </div>
          </div>

          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg mh">
              <img src="{{ asset('images/icon-02.svg') }}" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">Accessible Everywhere</h4>
              <p>Learn in the classroom or at home using any browser—no expensive hardware required.</p>
            </div>
          </div>

          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg mh">
              <img src="{{ asset('images/icon-03.svg') }}" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">Mentored Learning Pathways</h4>
              <p>Track progress with curriculum-aligned modules, coaching and collaborative challenges.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="ji gp uq 2xl:ud-py-35 pg">
      <div class="bb ze ki xn wq">
        <div class="tc wf gg qq">
          <!-- About Images -->
          <div class="animate_left xc gn gg jn/2 i">
            <div>
              <img src="{{ asset('images/about-01.png') }}" alt="About" class="ib" />
              <img src="{{ asset('images/about-02.png') }}" alt="About" />
            </div>
            <div>
              <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" />
              <img src="{{ asset('images/about-03.png') }}" alt="About" class="ob gb" />
              <img src="{{ asset('images/shape-07.svg') }}" alt="Shape" class="bb" />
            </div>
          </div>

          <!-- About Content -->
          <div class="animate_right jn/2">
            <h4 class="ek yj mk gb">Who We Are</h4>
            <h2 class="fk vj zp pr kk wm qb">Empowering girls to create, question and lead with technology.</h2>
            <p class="uo">
              Since 1999 Adilisha has worked to break stereotypes, amplify women’s voices in technology,
              and open pathways for girls to explore STEM with curiosity and confidence. Our STEM Lab
              extends that mission through immersive, inclusive learning experiences.
            </p>

            <a href="https://www.youtube.com/watch?v=xcJtL7QggTI" data-fslightbox class="vc wf hg mb">
              <span class="tc wf xf be dd rg i gh ua">
                <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                <img src="{{ asset('images/icon-play.svg') }}" alt="Play" />
              </span>
              <span class="kk">Discover the Adilisha story</span>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- ===== Services Start ===== -->
    <section id="subjects" class="lj tp kr">
      <!-- Section Title Start -->
      <div
        x-data="{ sectionTitle: `Program tracks inside Adilisha STEM Lab`, sectionTitleText: `From foundational science to emerging technology, our modules are tailored for primary, secondary and high school girls across Tanzania.`}">
        <div class="animate_top bb ze rj ki xn vq">
          <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
          </h2>
          <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>

      </div>
      <!-- Section Title End -->

      <div class="bb ze ki xn yq mb en">
        <div class="wc qf pn xo ng">
          <!-- Service Item -->
          <div class="animate_top sg oi pi zq ml il am cn _m">
            <img src="{{ asset('images/biology.svg') }}" alt="Icon" />
            <h4 class="ek zj kk wm nb _b">Biology & Human Health</h4>
            <p>Explore ecosystems, anatomy and wellness through safe, guided lab simulations.</p>
          </div>

          <!-- Service Item -->
          <div class="animate_top sg oi pi zq ml il am cn _m">
            <img src="{{ asset('images/chemistry.svg') }}" alt="Icon" />
            <h4 class="ek zj kk wm nb _b">Chemistry Reimagined</h4>
            <p>Conduct virtual experiments, mix reagents and visualize reactions without a physical lab.</p>
          </div>

          <!-- Service Item -->
          <div class="animate_top sg oi pi zq ml il am cn _m">
            <img src="{{ asset('images/physics.svg') }}" alt="Icon" />
            <h4 class="ek zj kk wm nb _b">Physics & Engineering</h4>
            <p>Test forces, flight and energy concepts with interactive, hands-on problem solving.</p>
          </div>

          <!-- Service Item -->
          <div class="animate_top sg oi pi zq ml il am cn _m">
            <img src="{{ asset('images/mathematics.svg') }}" alt="Icon" />
            <h4 class="ek zj kk wm nb _b">Mathematics Labs</h4>
            <p>Build quantitative confidence through visualised algebra, geometry and data science puzzles.</p>
          </div>

          <!-- Service Item -->
          <div class="animate_top sg oi pi zq ml il am cn _m">
            <img src="{{ asset('images/codeing.svg') }}" alt="Icon" />
            <h4 class="ek zj kk wm nb _b">Coding</h4>
            <p>Create programs and automate tasks with collaborative coding challenges.</p>
          </div>

          <!-- Service Item -->
          <div class="animate_top sg oi pi zq ml il am cn _m">
            <img src="{{ asset('images/robotics.svg') }}" alt="Icon" />
            <h4 class="ek zj kk wm nb _b">Robotics</h4>
            <p>Prototype robots and explore automation through hands-on engineering challenges.</p>
          </div>
        </div>
      </div>
    </section>


    <section class="i pg fh rm ji gp uq">
      <!-- Bg Shapes -->
      <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h aa y" />
      <img src="{{ asset('images/shape-07.svg') }}" alt="Shape" class="h w da ee" />
      <img src="{{ asset('images/shape-12.svg') }}" alt="Shape" class="h p s" />
      <img src="{{ asset('images/shape-13.svg') }}" alt="Shape" class="h r q" />

      <!-- Section Title Start -->
      <div class="animate_top bb ze rj ki xn vq">
        <h2 class="fk vj pr kk wm on/5 gq/2 bb _b">
          Learning in action across Tanzania
        </h2>
        <p class="bb on/5 wo/5 hq">
          Take a glimpse at how girls experiment, collaborate and build confidence inside Adilisha STEM Lab.
        </p>
      </div>
      <!-- Section Title End -->

      <!-- Learning Pathways -->
      <div class="bb ze i va ki xn yq bc">
        <div class="wc qf pn xo jg">
          <div class="animate_top rj sg hh sm vk xm hi nj oj">
            <h4 class="wj kk wm fb">Primary Explorer (Standards 1-7)</h4>
            <p class="ur dc">
              Ignite curiosity with playful science storytelling, numeracy adventures and local role models.
            </p>
            <ul class="tc sf bg ob fb">
              <li>Interactive experiments that connect to everyday life</li>
              <li>Foundational coding puzzles and maker activities</li>
              <li>Teacher and caregiver guides for continued learning</li>
            </ul>

          </div>
          <div class="animate_top rj sg hh sm vk xm hi nj oj">
            <h4 class="wj kk wm fb">Secondary Innovator (Forms 1-4)</h4>
            <p class="ur dc">
              Deepen understanding through curriculum-aligned labs, robotics missions and mentor circles.
            </p>
            <ul class="tc sf bg ob fb">
              <li>Immersive simulations in biology, chemistry, physics and mathematics</li>
              <li>Introductory aviation, robotics and coding challenges</li>
              <li>Guidance from women pioneers in STEM</li>
            </ul>

          </div>
          <div class="animate_top rj sg hh sm vk xm hi nj oj">
            <h4 class="wj kk wm fb">Advanced Creator (A-Level & Youth Clubs)</h4>
            <p class="ur dc">
              Prototype solutions, build portfolios and prepare for STEM careers or higher education.
            </p>
            <ul class="tc sf bg ob fb">
              <li>Advanced engineering, aerospace and sustainability labs</li>
              <li>Design thinking sprints and community innovation challenges</li>
              <li>Career navigation, scholarships and internship pathways</li>
            </ul>

          </div>
        </div>
      </div>
    </section>


    <section class="pg pj vp mr oj wp nr">
      <!-- Section Title Start -->
      <div
        x-data="{ sectionTitle: `Voices from our learners and partners`, sectionTitleText: `Educators, students and mentors share how Adilisha STEM Lab is transforming attitudes toward science and technology.`}">
        <div class="animate_top bb ze rj ki xn vq">
          <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
          </h2>
          <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>
      </div>
      <!-- Section Title End -->

      <div class="bb ze ki xn ar">
        <div class="animate_top jb cq">
          <div class="i hh rm sg vk xm bi qj">
            <!-- Border Shape -->
            <span class="rc je md/2 gh xg h q r"></span>
            <span class="rc je md/2 mh yg h q p"></span>

            <div class="tc sf rn tn un zf dp">
              <img class="bf" src="{{ asset('images/testimonial.png') }}" alt="User" />

              <div>
                <img src="{{ asset('images/icon-quote.svg') }}" alt="Quote" />
                <p class="ek ik xj _p kc fb">
                  "Since we introduced Adilisha STEM Lab, my girls lead experiments with confidence and speak about engineering in every assembly."
                </p>

                <div class="tc yf vf">
                  <div>
                    <span class="rc ek xj kk wm zb">Neema Musa</span>
                    <span class="rc">Science teacher, Mwanza</span>
                  </div>

                  <img class="rk" src="{{ asset('images/logo/logo-dark.svg') }}" alt="Brand" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="i pg qh rm ji hp">
      <img src="{{ asset('images/shape-11.svg') }}" alt="Shape" class="of h ga ha ke" />
      <img src="{{ asset('images/shape-14.svg') }}" alt="Shape" class="h ia o ae jf" />
      <img src="{{ asset('images/shape-15.svg') }}" alt="Shape" class="h q p" />

      <div class="bb ze i va ki xn br">
        <div class="tc uf sn tn xf un gg">
          <div class="animate_top me/5 ln rj">
            <h2 class="gk vj zp or kk wm hc">4,200+</h2>
            <p class="ek bk aq">Girls immersed in STEM learning</p>
          </div>
          <div class="animate_top me/5 ln rj">
            <h2 class="gk vj zp or kk wm hc">180</h2>
            <p class="ek bk aq">Partner schools across Tanzania</p>
          </div>
          <div class="animate_top me/5 ln rj">
            <h2 class="gk vj zp or kk wm hc">65</h2>
            <p class="ek bk aq">Dedicated mentors and facilitators</p>
          </div>
          <div class="animate_top me/5 ln rj">
            <h2 class="gk vj zp or kk wm hc">12</h2>
            <p class="ek bk aq">Interactive STEM disciplines offered</p>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Counter End ===== -->

    <!-- ===== Clients Start ===== -->
    <section class="pj vp mr">
      <!-- Section Title Start -->
      <div
        x-data="{ sectionTitle: `Donors`, sectionTitleText: `We are grateful to our generous donors who support our mission to empower girls in STEM education across Tanzania.`}">
        <div class="animate_top bb ze rj ki xn vq">
          <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
          </h2>
          <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


      </div>
      <!-- Section Title End -->

      <div class="bb ze ah ch pm hj xp ki xn 2xl:ud-px-49 bc">
        <div class="wc rf qn zf cp kq xf wf">
          <a href="#!" class="rc animate_top">
            <img class="th wl ml il zl om" src="{{ asset('images/segal.svg') }}" alt="Donor" />
            <img class="xc sk ml il zl nm" src="{{ asset('images/segal.svg') }}" alt="Donor" />
          </a>
        </div>
      </div>
    </section>

    <section id="support" class="i pg fh rm ji gp uq">
      <!-- Bg Shapes -->
      <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h aa y" />
      <img src="{{ asset('images/shape-07.svg') }}" alt="Shape" class="h w da ee" />
      <img src="{{ asset('images/shape-12.svg') }}" alt="Shape" class="h p s" />
      <img src="{{ asset('images/shape-13.svg') }}" alt="Shape" class="h r q" />

      <!-- Section Title Start -->
      <div
        x-data="{ sectionTitle: `Let’s build the next generation of innovators`, sectionTitleText: `Partner with Adilisha to introduce immersive STEM learning, share feedback or request a demonstration of our virtual lab.`}">
        <div class="animate_top bb ze rj ki xn vq">
          <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
          </h2>
          <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


      </div>
      <!-- Section Title End -->

      <div class="i va bb ye ki xn wq jb mo">
        <div class="tc uf sn tf rn un zf xl:gap-10">
          <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
            <!-- Bg Shapes -->
            <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h la ma ne kf" />

            <div class="fb">
              <h4 class="wj kk wm cc">Email Address</h4>
              <p><a href="#!">support@startup.com</a></p>
            </div>
            <div class="fb">
              <h4 class="wj kk wm cc">Office Location</h4>
              <p>Mwanza.</p>
            </div>
            <div class="fb">
              <h4 class="wj kk wm cc">Phone Number</h4>
              <p><a href="#!">+255 754 3433 223</a></p>
            </div>
            <div class="fb">
              <h4 class="wj kk wm cc">Skype Email</h4>
              <p><a href="#!">info@adilisha.org</a></p>
            </div>

            <span class="rc nd rh tm lc fb"></span>

            <div>
              <h4 class="wj kk wm qb">Social Media</h4>
              <ul class="tc wf fg">
                <li>
                  <a href="#!" class="c tc wf xf ie ld rg ml il tl">
                    <svg class="th lm ml il" width="11" height="20" viewBox="0 0 11 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M6.83366 11.3752H9.12533L10.042 7.7085H6.83366V5.87516C6.83366 4.931 6.83366 4.04183 8.667 4.04183H10.042V0.96183C9.74316 0.922413 8.61475 0.833496 7.42308 0.833496C4.93433 0.833496 3.16699 2.35241 3.16699 5.14183V7.7085H0.416992V11.3752H3.16699V19.1668H6.83366V11.3752Z"
                        fill="" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#!" class="c tc wf xf ie ld rg ml il tl">
                    <svg class="th lm ml il" width="20" height="16" viewBox="0 0 20 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M19.3153 2.18484C18.6155 2.4944 17.8733 2.6977 17.1134 2.78801C17.9144 2.30899 18.5138 1.55511 18.8001 0.666844C18.0484 1.11418 17.2244 1.42768 16.3654 1.59726C15.7885 0.979958 15.0238 0.57056 14.1901 0.432713C13.3565 0.294866 12.5007 0.436294 11.7558 0.835009C11.0108 1.23372 10.4185 1.86739 10.0708 2.63749C9.72313 3.40759 9.63963 4.27098 9.83327 5.09343C8.30896 5.01703 6.81775 4.62091 5.45645 3.93079C4.09516 3.24067 2.89423 2.27197 1.93161 1.08759C1.59088 1.67284 1.41182 2.33814 1.41278 3.01534C1.41278 4.34451 2.08928 5.51876 3.11778 6.20626C2.50912 6.1871 1.91386 6.02273 1.38161 5.72685V5.77451C1.38179 6.65974 1.68811 7.51766 2.24864 8.20282C2.80916 8.88797 3.58938 9.3582 4.45703 9.53376C3.89201 9.68688 3.29956 9.70945 2.72453 9.59976C2.96915 10.3617 3.44595 11.0281 4.08815 11.5056C4.73035 11.9831 5.50581 12.2478 6.30594 12.2627C5.51072 12.8872 4.60019 13.3489 3.62642 13.6213C2.65264 13.8938 1.63473 13.9716 0.630859 13.8503C2.38325 14.9773 4.4232 15.5756 6.50669 15.5737C13.5586 15.5737 17.415 9.73176 17.415 4.66535C17.415 4.50035 17.4104 4.33351 17.4031 4.17035C18.1537 3.62783 18.8016 2.95578 19.3162 2.18576L19.3153 2.18484Z"
                        fill="" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#!" class="c tc wf xf ie ld rg ml il tl">
                    <svg class="th lm ml il" width="19" height="18" viewBox="0 0 19 18" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M4.36198 2.58327C4.36174 3.0695 4.16835 3.53572 3.82436 3.87937C3.48037 4.22301 3.01396 4.41593 2.52773 4.41569C2.0415 4.41545 1.57528 4.22206 1.23164 3.87807C0.887991 3.53408 0.69507 3.06767 0.695313 2.58144C0.695556 2.09521 0.888943 1.62899 1.23293 1.28535C1.57692 0.941701 2.04333 0.748781 2.52956 0.749024C3.01579 0.749267 3.48201 0.942654 3.82566 1.28664C4.1693 1.63063 4.36222 2.09704 4.36198 2.58327ZM4.41698 5.77327H0.750313V17.2499H4.41698V5.77327ZM10.2103 5.77327H6.56198V17.2499H10.1736V11.2274C10.1736 7.87244 14.5461 7.56077 14.5461 11.2274V17.2499H18.167V9.98077C18.167 4.32494 11.6953 4.53577 10.1736 7.31327L10.2103 5.77327Z"
                        fill="" />
                    </svg>
                  </a>
                </li>

              </ul>
            </div>
          </div>

          <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
            <form>
              <div class="tc sf yo ap zf ep qb">
                <div class="vd to/2">
                  <label class="rc ac" for="fullname">Full name</label>
                  <input type="text" name="fullname" id="fullname" placeholder="Devid Wonder"
                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                </div>

                <div class="vd to/2">
                  <label class="rc ac" for="email">Email address</label>
                  <input type="email" name="email" id="email" placeholder="example@gmail.com"
                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                </div>
              </div>

              <div class="tc sf yo ap zf ep qb">
                <div class="vd to/2">
                  <label class="rc ac" for="phone">Phone number</label>
                  <input type="text" name="phone" id="phone" placeholder="+009 3342 3432"
                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                </div>

                <div class="vd to/2">
                  <label class="rc ac" for="subject">Subject</label>
                  <input type="text" for="subject" id="subject" placeholder="Type your subject"
                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                </div>
              </div>

              <div class="fb">
                <label class="rc ac" for="message">Message</label>
                <textarea placeholder="Message" rows="4" name="message" id="message"
                  class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"></textarea>
              </div>

              <div class="tc xf">
                <button class="vc rg lk gh ml il hi gi _l">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Contact End ===== -->

    <!-- ===== CTA Start ===== -->
    <section class="i pg gh ji">
      <!-- Bg Shape -->
      <img class="h p q" src="{{ asset('images/shape-16.svg') }}" alt="Bg Shape" />

      <div class="bb ye i z-10 ki xn dr">
        <div class="tc uf sn tn un gg">
          <div class="animate_left to/2">
            <h2 class="fk vj zp pr lk ac">
              Join Adilisha in making STEM joyful, inclusive and fearless.
            </h2>
            <p class="lk">
              Together we can equip girls with the skills, confidence and curiosity to shape Tanzania’s future through science and technology.
            </p>
          </div>
          <div class="animate_right bf">
            <a href="#!" class="vc ek kk hh rg ol il cm gi hi">
              Partner with us
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CTA End ===== -->
  </main>
@endsection
@push('scripts')
<script>
    //  Pricing Table
    const setup = () => {
      return {
        isNavOpen: false,

        billPlan: 'monthly',

        plans: [
          {
            name: 'Primary Explorer',
            price: {
              monthly: 0,
              annually: 0,
            },
            features: ['Interactive science storytelling', 'Foundational math fluency quests', 'Teacher facilitation guides'],
          },
          {
            name: 'Secondary Innovator',
            price: {
              monthly: 0,
              annually: 0,
            },
            features: ['Chemistry & physics simulations', 'Coding and robotics missions', 'STEM mentor circles'],
          },
          {
            name: 'Advanced Creator',
            price: {
              monthly: 0,
              annually: 0,
            },
            features: ['Aviation and engineering labs', 'Design thinking sprints', 'Career exploration resources'],
          },
        ],
      };
    };
  </script>
@endpush

