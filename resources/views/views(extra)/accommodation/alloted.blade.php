<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/accommodation/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/accommodation/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/accommodation/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/accommodation/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/accommodation/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    <script src="https://raw.githubusercontent.com/nbubna/store/master/dist/store2.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/accommodation/main.css">
    <link rel="stylesheet" href="/accommodation/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini {{--sidebar-collapse--}}">
<div class="wrapper">

    @include('accommodation.layouts.header')
    @include('accommodation.layouts.sideboard')
    <div class="content-wrapper">
        <section class="content">
            <h4 class="header">Hostels</h4>
            <table class="table table-bordered table-striped overflow-auto">
                <tbody>
                <tr>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="1">1</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="2">2</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="3">3</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="4">4</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="5">5</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="6">6</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="7">7</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="8">8</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="9">9</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="101">101</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="102">102</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="103">103</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="11">11</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="121">121</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="122">122</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="123">123</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="131">131</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="132">132</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="133">133</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="141">141</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="142">142</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="143">143</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="151">151</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="152">152</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="153">153</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="161">161</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="162">162</td>
                    <td class="pointer hostel-changer" data-class-hov="bg-gray" data-hsno="163">163</td>
                </tr>
                </tbody>
            </table>
            <h4 class="header">Rooms</h4>
            <table class="table table-bordered table-striped overflow-auto td-color allocate-rooms">
                <tbody>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td>32</td>
                    <td>33</td>
                    <td>34</td>
                    <td>35</td>
                    <td>36</td>
                    <td>37</td>
                    <td>38</td>
                    <td>39</td>
                    <td>40</td>
                    <td>41</td>
                    <td>42</td>
                    <td>43</td>
                    <td>44</td>
                    <td>45</td>
                    <td>46</td>
                    <td>47</td>
                    <td>48</td>
                    <td>49</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>51</td>
                    <td>52</td>
                    <td>53</td>
                    <td>54</td>
                    <td>55</td>
                    <td>56</td>
                    <td>57</td>
                    <td>58</td>
                    <td>59</td>
                    <td>60</td>
                    <td>61</td>
                    <td>62</td>
                    <td>63</td>
                    <td>64</td>
                    <td>65</td>
                    <td>66</td>
                    <td>67</td>
                    <td>68</td>
                    <td>69</td>
                    <td>70</td>
                    <td>71</td>
                    <td>72</td>
                    <td>73</td>
                    <td>74</td>
                </tr>
                <tr>
                    <td>75</td>
                    <td>76</td>
                    <td>77</td>
                    <td>78</td>
                    <td>79</td>
                    <td>80</td>
                    <td>81</td>
                    <td>82</td>
                    <td>83</td>
                    <td>84</td>
                    <td>85</td>
                    <td>86</td>
                    <td>87</td>
                    <td>88</td>
                    <td>89</td>
                    <td>90</td>
                    <td>91</td>
                    <td>92</td>
                    <td>93</td>
                    <td>94</td>
                    <td>95</td>
                    <td>96</td>
                    <td>97</td>
                    <td>98</td>
                    <td>99</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>101</td>
                    <td>102</td>
                    <td>103</td>
                    <td>104</td>
                    <td>105</td>
                    <td>106</td>
                    <td>107</td>
                    <td>108</td>
                    <td>109</td>
                    <td>110</td>
                    <td>111</td>
                    <td>112</td>
                    <td>113</td>
                    <td>114</td>
                    <td>115</td>
                    <td>116</td>
                    <td>117</td>
                    <td>118</td>
                    <td>119</td>
                    <td>120</td>
                    <td>121</td>
                    <td>122</td>
                    <td>123</td>
                    <td>124</td>
                </tr>
                <tr>
                    <td>125</td>
                    <td>126</td>
                    <td>127</td>
                    <td>128</td>
                    <td>129</td>
                    <td>130</td>
                    <td>131</td>
                    <td>132</td>
                    <td>133</td>
                    <td>134</td>
                    <td>135</td>
                    <td>136</td>
                    <td>137</td>
                    <td>138</td>
                    <td>139</td>
                    <td>140</td>
                    <td>141</td>
                    <td>142</td>
                    <td>143</td>
                    <td>144</td>
                    <td>145</td>
                    <td>146</td>
                    <td>147</td>
                    <td>148</td>
                    <td>149</td>
                </tr>
                <tr>
                    <td>150</td>
                    <td>151</td>
                    <td>152</td>
                    <td>153</td>
                    <td>154</td>
                    <td>155</td>
                    <td>156</td>
                    <td>157</td>
                    <td>158</td>
                    <td>159</td>
                    <td>160</td>
                    <td>161</td>
                    <td>162</td>
                    <td>163</td>
                    <td>164</td>
                    <td>165</td>
                    <td>166</td>
                    <td>167</td>
                    <td>168</td>
                    <td>169</td>
                    <td>170</td>
                    <td>171</td>
                    <td>172</td>
                    <td>173</td>
                    <td>174</td>
                </tr>
                <tr>
                    <td>175</td>
                    <td>176</td>
                    <td>177</td>
                    <td>128</td>
                    <td>179</td>
                    <td>180</td>
                    <td>181</td>
                    <td>182</td>
                    <td>183</td>
                    <td>184</td>
                    <td>185</td>
                    <td>186</td>
                    <td>187</td>
                    <td>188</td>
                    <td>189</td>
                    <td>190</td>
                    <td>191</td>
                    <td>192</td>
                    <td>193</td>
                    <td>194</td>
                    <td>195</td>
                    <td>196</td>
                    <td>197</td>
                    <td>198</td>
                    <td>199</td>
                </tr>
                <tr>
                    <td>200</td>
                    <td>201</td>
                    <td>202</td>
                    <td>203</td>
                    <td>204</td>
                    <td>205</td>
                    <td>206</td>
                    <td>207</td>
                    <td>208</td>
                    <td>209</td>
                    <td>210</td>
                    <td>211</td>
                    <td>212</td>
                    <td>213</td>
                    <td>214</td>
                    <td>215</td>
                    <td>216</td>
                    <td>217</td>
                    <td>218</td>
                    <td>219</td>
                    <td>220</td>
                    <td>221</td>
                    <td>222</td>
                    <td>223</td>
                    <td>224</td>
                </tr>
                <tr>
                    <td>225</td>
                    <td>226</td>
                    <td>227</td>
                    <td>228</td>
                    <td>229</td>
                    <td>230</td>
                    <td>231</td>
                    <td>232</td>
                    <td>233</td>
                    <td>234</td>
                    <td>235</td>
                    <td>236</td>
                    <td>237</td>
                    <td>238</td>
                    <td>239</td>
                    <td>240</td>
                    <td>241</td>
                    <td>242</td>
                    <td>243</td>
                    <td>244</td>
                    <td>245</td>
                    <td>246</td>
                    <td>247</td>
                    <td>248</td>
                    <td>249</td>
                </tr>
                <tr>
                    <td>250</td>
                    <td>251</td>
                    <td>252</td>
                    <td>253</td>
                    <td>254</td>
                    <td>255</td>
                    <td>256</td>
                    <td>257</td>
                    <td>258</td>
                    <td>259</td>
                    <td>260</td>
                    <td>261</td>
                    <td>262</td>
                    <td>263</td>
                    <td>264</td>
                    <td>265</td>
                    <td>266</td>
                    <td>267</td>
                    <td>268</td>
                    <td>269</td>
                    <td>270</td>
                    <td>271</td>
                    <td>272</td>
                    <td>273</td>
                    <td>274</td>
                </tr>
                <tr>
                    <td>275</td>
                    <td>276</td>
                    <td>277</td>
                    <td>228</td>
                    <td>279</td>
                    <td>280</td>
                    <td>281</td>
                    <td>282</td>
                    <td>283</td>
                    <td>284</td>
                    <td>285</td>
                    <td>286</td>
                    <td>287</td>
                    <td>288</td>
                    <td>289</td>
                    <td>290</td>
                    <td>291</td>
                    <td>292</td>
                    <td>293</td>
                    <td>294</td>
                    <td>295</td>
                    <td>296</td>
                    <td>297</td>
                    <td>298</td>
                    <td>299</td>
                </tr>
                <tr>
                    <td>300</td>
                    <td>301</td>
                    <td>302</td>
                    <td>303</td>
                    <td>304</td>
                    <td>305</td>
                    <td>306</td>
                    <td>307</td>
                    <td>308</td>
                    <td>309</td>
                    <td>310</td>
                    <td>311</td>
                    <td>312</td>
                    <td>313</td>
                    <td>314</td>
                    <td>315</td>
                    <td>316</td>
                    <td>317</td>
                    <td>318</td>
                    <td>319</td>
                    <td>320</td>
                    <td>321</td>
                    <td>322</td>
                    <td>323</td>
                    <td>324</td>
                </tr>
                <tr>
                    <td>325</td>
                    <td>326</td>
                    <td>327</td>
                    <td>328</td>
                    <td>329</td>
                    <td>330</td>
                    <td>331</td>
                    <td>332</td>
                    <td>333</td>
                    <td>334</td>
                    <td>335</td>
                    <td>336</td>
                    <td>337</td>
                    <td>338</td>
                    <td>339</td>
                    <td>340</td>
                    <td>341</td>
                    <td>342</td>
                    <td>343</td>
                    <td>344</td>
                    <td>345</td>
                    <td>346</td>
                    <td>347</td>
                    <td>348</td>
                    <td>349</td>
                </tr>
                <tr>
                    <td>350</td>
                    <td>351</td>
                    <td>352</td>
                    <td>353</td>
                    <td>354</td>
                    <td>355</td>
                    <td>356</td>
                    <td>357</td>
                    <td>358</td>
                    <td>359</td>
                    <td>360</td>
                    <td>361</td>
                    <td>362</td>
                    <td>363</td>
                    <td>364</td>
                    <td>365</td>
                    <td>366</td>
                    <td>367</td>
                    <td>368</td>
                    <td>369</td>
                    <td>370</td>
                    <td>371</td>
                    <td>372</td>
                    <td>373</td>
                    <td>374</td>
                </tr>
                <tr>
                    <td>375</td>
                    <td>376</td>
                    <td>377</td>
                    <td>328</td>
                    <td>379</td>
                    <td>380</td>
                    <td>381</td>
                    <td>382</td>
                    <td>383</td>
                    <td>384</td>
                    <td>385</td>
                    <td>386</td>
                    <td>387</td>
                    <td>388</td>
                    <td>389</td>
                    <td>390</td>
                    <td>391</td>
                    <td>392</td>
                    <td>393</td>
                    <td>394</td>
                    <td>395</td>
                    <td>396</td>
                    <td>397</td>
                    <td>398</td>
                    <td>399</td>
                </tr>
                <tr>
                    <td>400</td>
                    <td>401</td>
                    <td>402</td>
                    <td>403</td>
                    <td>404</td>
                    <td>405</td>
                    <td>406</td>
                    <td>407</td>
                    <td>408</td>
                    <td>409</td>
                    <td>410</td>
                    <td>411</td>
                    <td>412</td>
                    <td>413</td>
                    <td>414</td>
                    <td>415</td>
                    <td>416</td>
                    <td>417</td>
                    <td>418</td>
                    <td>419</td>
                    <td>420</td>
                    <td>421</td>
                    <td>422</td>
                    <td>423</td>
                    <td>424</td>
                </tr>
                <tr>
                    <td>425</td>
                    <td>426</td>
                    <td>427</td>
                    <td>428</td>
                    <td>429</td>
                    <td>430</td>
                    <td>431</td>
                    <td>432</td>
                    <td>433</td>
                    <td>434</td>
                    <td>435</td>
                    <td>436</td>
                    <td>437</td>
                    <td>438</td>
                    <td>439</td>
                    <td>440</td>
                    <td>441</td>
                    <td>442</td>
                    <td>443</td>
                    <td>444</td>
                    <td>445</td>
                    <td>446</td>
                    <td>447</td>
                    <td>448</td>
                    <td>449</td>
                </tr>
                <tr>
                    <td>450</td>
                    <td>451</td>
                    <td>452</td>
                    <td>453</td>
                    <td>454</td>
                    <td>455</td>
                    <td>456</td>
                    <td>457</td>
                    <td>458</td>
                    <td>459</td>
                    <td>460</td>
                    <td>461</td>
                    <td>462</td>
                    <td>463</td>
                    <td>464</td>
                    <td>465</td>
                    <td>466</td>
                    <td>467</td>
                    <td>468</td>
                    <td>469</td>
                    <td>470</td>
                    <td>471</td>
                    <td>472</td>
                    <td>473</td>
                    <td>474</td>
                </tr>
                <tr>
                    <td>475</td>
                    <td>476</td>
                    <td>477</td>
                    <td>428</td>
                    <td>479</td>
                    <td>480</td>
                    <td>481</td>
                    <td>482</td>
                    <td>483</td>
                    <td>484</td>
                    <td>485</td>
                    <td>486</td>
                    <td>487</td>
                    <td>488</td>
                    <td>489</td>
                    <td>490</td>
                    <td>491</td>
                    <td>492</td>
                    <td>493</td>
                    <td>494</td>
                    <td>495</td>
                    <td>496</td>
                    <td>497</td>
                    <td>498</td>
                    <td>499</td>
                </tr>
                <tr>
                    <td>500</td>
                    <td>501</td>
                    <td>502</td>
                    <td>503</td>
                    <td>504</td>
                    <td>505</td>
                    <td>506</td>
                    <td>507</td>
                    <td>508</td>
                    <td>509</td>
                    <td>510</td>
                    <td>511</td>
                    <td>512</td>
                    <td>513</td>
                    <td>514</td>
                    <td>515</td>
                    <td>516</td>
                    <td>517</td>
                    <td>518</td>
                    <td>519</td>
                    <td>520</td>
                    <td>521</td>
                    <td>522</td>
                    <td>523</td>
                    <td>524</td>
                </tr>
                <tr>
                    <td>525</td>
                    <td>526</td>
                    <td>527</td>
                    <td>528</td>
                    <td>529</td>
                    <td>530</td>
                    <td>531</td>
                    <td>532</td>
                    <td>533</td>
                    <td>534</td>
                    <td>535</td>
                    <td>536</td>
                    <td>537</td>
                    <td>538</td>
                    <td>539</td>
                    <td>540</td>
                    <td>541</td>
                    <td>542</td>
                    <td>543</td>
                    <td>544</td>
                    <td>545</td>
                    <td>546</td>
                    <td>547</td>
                    <td>548</td>
                    <td>549</td>
                </tr>
                <tr>
                    <td>550</td>
                    <td>551</td>
                    <td>552</td>
                    <td>553</td>
                    <td>554</td>
                    <td>555</td>
                    <td>556</td>
                    <td>557</td>
                    <td>558</td>
                    <td>559</td>
                    <td>560</td>
                    <td>561</td>
                    <td>562</td>
                    <td>563</td>
                    <td>564</td>
                    <td>565</td>
                    <td>566</td>
                    <td>567</td>
                    <td>568</td>
                    <td>569</td>
                    <td>570</td>
                    <td>571</td>
                    <td>572</td>
                    <td>573</td>
                    <td>574</td>
                </tr>
                <tr>
                    <td>575</td>
                    <td>576</td>
                    <td>577</td>
                    <td>528</td>
                    <td>579</td>
                    <td>580</td>
                    <td>581</td>
                    <td>582</td>
                    <td>583</td>
                    <td>584</td>
                    <td>585</td>
                    <td>586</td>
                    <td>587</td>
                    <td>588</td>
                    <td>589</td>
                    <td>590</td>
                    <td>591</td>
                    <td>592</td>
                    <td>593</td>
                    <td>594</td>
                    <td>595</td>
                    <td>596</td>
                    <td>597</td>
                    <td>598</td>
                    <td>599</td>
                </tr>
                <tr>
                    <td>600</td>
                    <td>601</td>
                    <td>602</td>
                    <td>603</td>
                    <td>604</td>
                    <td>605</td>
                    <td>606</td>
                    <td>607</td>
                    <td>608</td>
                    <td>609</td>
                    <td>610</td>
                    <td>611</td>
                    <td>612</td>
                    <td>613</td>
                    <td>614</td>
                    <td>615</td>
                    <td>616</td>
                    <td>617</td>
                    <td>618</td>
                    <td>619</td>
                    <td>620</td>
                    <td>621</td>
                    <td>622</td>
                    <td>623</td>
                    <td>624</td>
                </tr>
                <tr>
                    <td>625</td>
                    <td>626</td>
                    <td>627</td>
                    <td>628</td>
                    <td>629</td>
                    <td>630</td>
                    <td>631</td>
                    <td>632</td>
                    <td>633</td>
                    <td>634</td>
                    <td>635</td>
                    <td>636</td>
                    <td>637</td>
                    <td>638</td>
                    <td>639</td>
                    <td>640</td>
                    <td>641</td>
                    <td>642</td>
                    <td>643</td>
                    <td>644</td>
                    <td>645</td>
                    <td>646</td>
                    <td>647</td>
                    <td>648</td>
                    <td>649</td>
                </tr>
                <tr>
                    <td>650</td>
                    <td>651</td>
                    <td>652</td>
                    <td>653</td>
                    <td>654</td>
                    <td>655</td>
                    <td>656</td>
                    <td>657</td>
                    <td>658</td>
                    <td>659</td>
                    <td>660</td>
                    <td>661</td>
                    <td>662</td>
                    <td>663</td>
                    <td>664</td>
                    <td>665</td>
                    <td>666</td>
                    <td>667</td>
                    <td>668</td>
                    <td>669</td>
                    <td>670</td>
                    <td>671</td>
                    <td>672</td>
                    <td>673</td>
                    <td>674</td>
                </tr>
                <tr>
                    <td>675</td>
                    <td>676</td>
                    <td>677</td>
                    <td>628</td>
                    <td>679</td>
                    <td>680</td>
                    <td>681</td>
                    <td>682</td>
                    <td>683</td>
                    <td>684</td>
                    <td>685</td>
                    <td>686</td>
                    <td>687</td>
                    <td>688</td>
                    <td>689</td>
                    <td>690</td>
                    <td>691</td>
                    <td>692</td>
                    <td>693</td>
                    <td>694</td>
                    <td>695</td>
                    <td>696</td>
                    <td>697</td>
                    <td>698</td>
                    <td>699</td>
                </tr>
                <tr>
                    <td>700</td>
                    <td>701</td>
                    <td>702</td>
                    <td>703</td>
                    <td>704</td>
                    <td>705</td>
                    <td>706</td>
                    <td>707</td>
                    <td>708</td>
                    <td>709</td>
                    <td>710</td>
                    <td>711</td>
                    <td>712</td>
                    <td>713</td>
                    <td>714</td>
                    <td>715</td>
                    <td>716</td>
                    <td>717</td>
                    <td>718</td>
                    <td>719</td>
                    <td>720</td>
                    <td>721</td>
                    <td>722</td>
                    <td>723</td>
                    <td>724</td>
                </tr>
                <tr>
                    <td>725</td>
                    <td>726</td>
                    <td>727</td>
                    <td>728</td>
                    <td>729</td>
                    <td>730</td>
                    <td>731</td>
                    <td>732</td>
                    <td>733</td>
                    <td>734</td>
                    <td>735</td>
                    <td>736</td>
                    <td>737</td>
                    <td>738</td>
                    <td>739</td>
                    <td>740</td>
                    <td>741</td>
                    <td>742</td>
                    <td>743</td>
                    <td>744</td>
                    <td>745</td>
                    <td>746</td>
                    <td>747</td>
                    <td>748</td>
                    <td>749</td>
                </tr>
                <tr>
                    <td>750</td>
                    <td>751</td>
                    <td>752</td>
                    <td>753</td>
                    <td>754</td>
                    <td>755</td>
                    <td>756</td>
                    <td>757</td>
                    <td>758</td>
                    <td>759</td>
                    <td>760</td>
                    <td>761</td>
                    <td>762</td>
                    <td>763</td>
                    <td>764</td>
                    <td>765</td>
                    <td>766</td>
                    <td>767</td>
                    <td>768</td>
                    <td>769</td>
                    <td>770</td>
                    <td>771</td>
                    <td>772</td>
                    <td>773</td>
                    <td>774</td>
                </tr>
                <tr>
                    <td>775</td>
                    <td>776</td>
                    <td>777</td>
                    <td>728</td>
                    <td>779</td>
                    <td>780</td>
                    <td>781</td>
                    <td>782</td>
                    <td>783</td>
                    <td>784</td>
                    <td>785</td>
                    <td>786</td>
                    <td>787</td>
                    <td>788</td>
                    <td>789</td>
                    <td>790</td>
                    <td>791</td>
                    <td>792</td>
                    <td>793</td>
                    <td>794</td>
                    <td>795</td>
                    <td>796</td>
                    <td>797</td>
                    <td>798</td>
                    <td>799</td>
                </tr>
                <tr>
                    <td>800</td>
                    <td>801</td>
                    <td>802</td>
                    <td>803</td>
                    <td>804</td>
                    <td>805</td>
                    <td>806</td>
                    <td>807</td>
                    <td>808</td>
                    <td>809</td>
                    <td>810</td>
                    <td>811</td>
                    <td>812</td>
                    <td>813</td>
                    <td>814</td>
                    <td>815</td>
                    <td>816</td>
                    <td>817</td>
                    <td>818</td>
                    <td>819</td>
                    <td>820</td>
                    <td>821</td>
                    <td>822</td>
                    <td>823</td>
                    <td>824</td>
                </tr>
                <tr>
                    <td>825</td>
                    <td>826</td>
                    <td>827</td>
                    <td>828</td>
                    <td>829</td>
                    <td>830</td>
                    <td>831</td>
                    <td>832</td>
                    <td>833</td>
                    <td>834</td>
                    <td>835</td>
                    <td>836</td>
                    <td>837</td>
                    <td>838</td>
                    <td>839</td>
                    <td>840</td>
                    <td>841</td>
                    <td>842</td>
                    <td>843</td>
                    <td>844</td>
                    <td>845</td>
                    <td>846</td>
                    <td>847</td>
                    <td>848</td>
                    <td>849</td>
                </tr>
                <tr>
                    <td>850</td>
                    <td>851</td>
                    <td>852</td>
                    <td>853</td>
                    <td>854</td>
                    <td>855</td>
                    <td>856</td>
                    <td>857</td>
                    <td>858</td>
                    <td>859</td>
                    <td>860</td>
                    <td>861</td>
                    <td>862</td>
                    <td>863</td>
                    <td>864</td>
                    <td>865</td>
                    <td>866</td>
                    <td>867</td>
                    <td>868</td>
                    <td>869</td>
                    <td>870</td>
                    <td>871</td>
                    <td>872</td>
                    <td>873</td>
                    <td>874</td>
                </tr>
                <tr>
                    <td>875</td>
                    <td>876</td>
                    <td>877</td>
                    <td>828</td>
                    <td>879</td>
                    <td>880</td>
                    <td>881</td>
                    <td>882</td>
                    <td>883</td>
                    <td>884</td>
                    <td>885</td>
                    <td>886</td>
                    <td>887</td>
                    <td>888</td>
                    <td>889</td>
                    <td>890</td>
                    <td>891</td>
                    <td>892</td>
                    <td>893</td>
                    <td>894</td>
                    <td>895</td>
                    <td>896</td>
                    <td>897</td>
                    <td>898</td>
                    <td>899</td>
                </tr>
                <tr>
                    <td>900</td>
                    <td>901</td>
                    <td>902</td>
                    <td>903</td>
                    <td>904</td>
                    <td>905</td>
                    <td>906</td>
                    <td>907</td>
                    <td>908</td>
                    <td>909</td>
                    <td>910</td>
                    <td>911</td>
                    <td>912</td>
                    <td>913</td>
                    <td>914</td>
                    <td>915</td>
                    <td>916</td>
                    <td>917</td>
                    <td>918</td>
                    <td>919</td>
                    <td>920</td>
                    <td>921</td>
                    <td>922</td>
                    <td>923</td>
                    <td>924</td>
                </tr>
                <tr>
                    <td>925</td>
                    <td>926</td>
                    <td>927</td>
                    <td>928</td>
                    <td>929</td>
                    <td>930</td>
                    <td>931</td>
                    <td>932</td>
                    <td>933</td>
                    <td>934</td>
                    <td>935</td>
                    <td>936</td>
                    <td>937</td>
                    <td>938</td>
                    <td>939</td>
                    <td>940</td>
                    <td>941</td>
                    <td>942</td>
                    <td>943</td>
                    <td>944</td>
                    <td>945</td>
                    <td>946</td>
                    <td>947</td>
                    <td>948</td>
                    <td>949</td>
                </tr>
                <tr>
                    <td>950</td>
                    <td>951</td>
                    <td>952</td>
                    <td>953</td>
                    <td>954</td>
                    <td>955</td>
                    <td>956</td>
                    <td>957</td>
                    <td>958</td>
                    <td>959</td>
                    <td>960</td>
                    <td>961</td>
                    <td>962</td>
                    <td>963</td>
                    <td>964</td>
                    <td>965</td>
                    <td>966</td>
                    <td>967</td>
                    <td>968</td>
                    <td>969</td>
                    <td>970</td>
                    <td>971</td>
                    <td>972</td>
                    <td>973</td>
                    <td>974</td>
                </tr>
                <tr>
                    <td>975</td>
                    <td>976</td>
                    <td>977</td>
                    <td>928</td>
                    <td>979</td>
                    <td>980</td>
                    <td>981</td>
                    <td>982</td>
                    <td>983</td>
                    <td>984</td>
                    <td>985</td>
                    <td>986</td>
                    <td>987</td>
                    <td>988</td>
                    <td>989</td>
                    <td>990</td>
                    <td>991</td>
                    <td>992</td>
                    <td>993</td>
                    <td>994</td>
                    <td>995</td>
                    <td>996</td>
                    <td>997</td>
                    <td>998</td>
                    <td>999</td>
                </tr>
                <tr>
                    <td>1000</td>
                    <td>1001</td>
                    <td>1002</td>
                    <td>1003</td>
                    <td>1004</td>
                    <td>1005</td>
                    <td>1006</td>
                    <td>1007</td>
                    <td>1008</td>
                    <td>1009</td>
                    <td>1010</td>
                    <td>1011</td>
                    <td>1012</td>
                    <td>1013</td>
                    <td>1014</td>
                    <td>1015</td>
                    <td>1016</td>
                    <td>1017</td>
                    <td>1018</td>
                    <td>1019</td>
                    <td>1020</td>
                    <td>1021</td>
                    <td>1022</td>
                    <td>1023</td>
                    <td>1024</td>
                </tr>
                <tr>
                    <td>1025</td>
                    <td>1026</td>
                    <td>1027</td>
                    <td>1028</td>
                    <td>1029</td>
                    <td>1030</td>
                    <td>1031</td>
                    <td>1032</td>
                    <td>1033</td>
                    <td>1034</td>
                    <td>1035</td>
                    <td>1036</td>
                    <td>1037</td>
                    <td>1038</td>
                    <td>1039</td>
                    <td>1040</td>
                    <td>1041</td>
                    <td>1042</td>
                    <td>1043</td>
                    <td>1044</td>
                    <td>1045</td>
                    <td>1046</td>
                    <td>1047</td>
                    <td>1048</td>
                    <td>1049</td>
                </tr>
                <tr>
                    <td>1050</td>
                    <td>1051</td>
                    <td>1052</td>
                    <td>1053</td>
                    <td>1054</td>
                    <td>1055</td>
                    <td>1056</td>
                    <td>1057</td>
                    <td>1058</td>
                    <td>1059</td>
                    <td>1060</td>
                    <td>1061</td>
                    <td>1062</td>
                    <td>1063</td>
                    <td>1064</td>
                    <td>1065</td>
                    <td>1066</td>
                    <td>1067</td>
                    <td>1068</td>
                    <td>1069</td>
                    <td>1070</td>
                    <td>1071</td>
                    <td>1072</td>
                    <td>1073</td>
                    <td>1074</td>
                </tr>
                <tr>
                    <td>1075</td>
                    <td>1076</td>
                    <td>1077</td>
                    <td>1028</td>
                    <td>1079</td>
                    <td>1080</td>
                    <td>1081</td>
                    <td>1082</td>
                    <td>1083</td>
                    <td>1084</td>
                    <td>1085</td>
                    <td>1086</td>
                    <td>1087</td>
                    <td>1088</td>
                    <td>1089</td>
                    <td>1090</td>
                    <td>1091</td>
                    <td>1092</td>
                    <td>1093</td>
                    <td>1094</td>
                    <td>1095</td>
                    <td>1096</td>
                    <td>1097</td>
                    <td>1098</td>
                    <td>1099</td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="/accommodation/https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="/accommodation/#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="/accommodation/#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="/accommodation/javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/accommodation/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/accommodation/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/accommodation/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="/accommodation/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/accommodation/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/accommodation/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/accommodation/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/accommodation/bower_components/moment/min/moment.min.js"></script>
<script src="/accommodation/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/accommodation/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/accommodation/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/accommodation/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/accommodation/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/accommodation/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/accommodation/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/accommodation/dist/js/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
<script src="https://raw.githubusercontent.com/nbubna/store/master/dist/store2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.6.2/mousetrap.js"></script>


<script src="/accommodation/main.js"></script>


</body>
</html>
