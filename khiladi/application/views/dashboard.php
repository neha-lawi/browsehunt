 <!-- Begin Page Content -->
          <div class="content-wrapper-main">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-8 col-lg-8">
                  <!-- Area Chart -->
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                      class="card-header pt-4 pb-3 d-flex flex-row align-items-center justify-content-between"
                    >
                      <h6 class="m-0">User by time of the day</h6>
                      <div class="chart-select">
                        <select
                          class="form-select"
                          aria-label="Default select example"
                        >
                          <option selected>This Month</option>
                          <option value="1">Jan</option>
                          <option value="2">Feb</option>
                          <option value="3">Mar</option>
                          <option value="4">Apr</option>
                          <option value="5">May</option>
                          <option value="6">Jun</option>
                          <option value="7">July</option>
                          <option value="8">Aug</option>
                          <option value="9">Sep</option>
                          <option value="10">Oct</option>
                          <option value="11">Nov</option>
                          <option value="12">Dec</option>
                        </select>
                      </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                  <!-- Sessions by devices Progress -->
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                      class="card-header pt-4 pb-3 d-flex flex-row align-items-center justify-content-between"
                    >
                      <h6 class="m-0">Sessions by devices</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body mb-3">
                      <div class="device">
                        <div class="device-wrap">
                          <div class="progress device-1">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-circle bg-light-pink"></div>
                            <div class="progress-value">
                              <p class="progress-value-percent">2.5%</p>
                              <span class="device-type">Tablet</span>
                            </div>
                          </div>

                          <div class="progress device-2">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div
                              class="progress-circle bg-light-lavender"
                            ></div>
                            <div class="progress-value">
                              <p class="progress-value-percent">79.2%</p>
                              <span class="device-type">Desktop</span>
                            </div>
                          </div>

                          <div class="progress device-3">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-circle bg-light-green"></div>
                            <div class="progress-value">
                              <p class="progress-value-percent">17.3%</p>
                              <span class="device-type">Mobile</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12">
                  <!-- DataTables -->
                  <div class="card shadow mb-4">
                    <div
                      class="card-header pt-4 pb-3 d-flex justify-content-between align-items-center"
                    >
                      <h6 class="m-0">DataTables</h6>
                      <a class="m-0 btn-link text-decoration-none" href="#">
                        View all
                      </a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <div
                          id="dataTable_wrapper"
                          class="dataTables_wrapper dt-bootstrap4"
                        >
                          <div class="row">
                            <div class="col-sm-12">
                              <table
                                class="table table-striped dataTable"
                                id="dataTable"
                                width="100%"
                                cellspacing="0"
                                role="grid"
                                aria-describedby="dataTable_info"
                                style="width: 100%"
                              >
                                <thead>
                                  <tr role="row">
                                    <th
                                      id="clientProfile"
                                      class="sorting sorting_asc"
                                      tabindex="0"
                                      aria-controls="dataTable"
                                      rowspan="1"
                                      colspan="1"
                                      aria-sort="ascending"
                                      aria-label="Name: activate to sort column descending"
                                    >
                                      Client Profile
                                    </th>
                                    <th
                                      id="totalItem"
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="dataTable"
                                      rowspan="1"
                                      colspan="1"
                                      aria-label="Position: activate to sort column ascending"
                                    >
                                      Total Item
                                    </th>
                                    <th
                                      id="totalSale"
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="dataTable"
                                      rowspan="1"
                                      colspan="1"
                                      aria-label="Office: activate to sort column ascending"
                                    >
                                      Total Sale
                                    </th>
                                    <th
                                      id="remainingItem"
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="dataTable"
                                      rowspan="1"
                                      colspan="1"
                                      aria-label="Age: activate to sort column ascending"
                                    >
                                      Remaining Item
                                    </th>
                                    <th
                                      id="deliveryDate"
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="dataTable"
                                      rowspan="1"
                                      colspan="1"
                                      aria-label="Start date: activate to sort column ascending"
                                    >
                                      Delivery date
                                    </th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Shubham Soni
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_1.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Kirti Singh
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_2.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Lalit Giriya
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_3.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Mansi shah
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Vinit Joshi
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Jay Kanojia
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_1.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Twinkle
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_2.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Gyanesh Dharewal
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_3.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Tanisha Idnani
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Siddhesh
                                          </div>
                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_1.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Disha Iyyer
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div
                                        class="d-flex align-items-center client"
                                      >
                                        <img
                                          class="client-img-profile rounded-circle"
                                          src="<?php echo IMG;?>undraw_profile_2.svg"
                                        />
                                        <div class="ms-2">
                                          <div
                                            class="client-name font-weight-bold"
                                          >
                                            Suraj Kumar
                                          </div>

                                          <div class="clinet-designation">
                                            CEO,
                                            <span class="client-location"
                                              >Dusky</span
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td>11k PC</td>
                                    <td>$250k</td>
                                    <td>$250k</td>
                                    <td>02-03-2023</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12">
                  <!-- Activity -->
                  <div class="card shadow mb-4">
                    <div
                      class="card-header pt-4 pb-3 d-flex justify-content-between align-items-center"
                    >
                      <h6 class="m-0">Activity</h6>
                      <a class="m-0 btn-link text-decoration-none" href="#">
                        View all
                      </a>
                    </div>
                    <div class="card-body">
                      <div class="activity">
                        <!-- Content Row -->
                        <div class="row">
                          <!-- Activity Card 1 -->
                          <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
                            <a href="#" class="text-decoration-none">
                              <div
                                class="card shadow h-100 activity-card bg-light-pink"
                              >
                                <div class="card-body">
                                  <div
                                    class="row no-gutters align-items-center"
                                  >
                                    <div class="col-4">
                                      <div
                                        class="activity-img bg-dark-pink me-2"
                                      >
                                        <i class="fab fa-mailchimp fa-2x"></i>
                                      </div>
                                    </div>
                                    <div class="col-8">
                                      <div class="activity-text mb-0">
                                        Mail Chimp
                                        <p class="expenditure mb-0">
                                          Sent:
                                          <span class="expenditure-amt"
                                            ><small class="expenditure-sign"
                                              >$</small
                                            >40,000</span
                                          >
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                          <!-- Activity Card 2 -->
                          <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
                            <a href="#" class="text-decoration-none">
                              <div
                                class="card shadow h-100 activity-card bg-light-green"
                              >
                                <div class="card-body">
                                  <div
                                    class="row no-gutters align-items-center"
                                  >
                                    <div class="col-4">
                                      <div
                                        class="activity-img bg-dark-green me-2"
                                      >
                                        <i class="fab fa-github fa-2x"></i>
                                      </div>
                                    </div>
                                    <div class="col-8">
                                      <div class="activity-text mb-0">
                                        Git hub
                                        <p class="expenditure mb-0">
                                          Invest:
                                          <span class="expenditure-amt"
                                            ><small class="expenditure-sign"
                                              >$</small
                                            >3,000</span
                                          >
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                          <!-- Activity Card 3 -->
                          <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
                            <a href="#" class="text-decoration-none">
                              <div
                                class="card shadow h-100 activity-card bg-light-lavender"
                              >
                                <div class="card-body">
                                  <div
                                    class="row no-gutters align-items-center"
                                  >
                                    <div class="col-4">
                                      <div
                                        class="activity-img me-2 bg-dark-lavender"
                                      >
                                        <i class="fas fa-dollar-sign fa-2x"></i>
                                      </div>
                                    </div>
                                    <div class="col-8">
                                      <div class="activity-text mb-0">
                                        Tinder Gold
                                        <p class="expenditure mb-0">
                                          Withdraw:
                                          <span class="expenditure-amt"
                                            ><small class="expenditure-sign"
                                              >$</small
                                            >2,500</span
                                          >
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                          <!-- Activity Card 4 -->
                          <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
                            <a href="#" class="text-decoration-none">
                              <div
                                class="card shadow h-100 activity-card bg-light-rust"
                              >
                                <div class="card-body">
                                  <div
                                    class="row no-gutters align-items-center"
                                  >
                                    <div class="col-4">
                                      <div
                                        class="activity-img me-2 bg-dark-rust"
                                      >
                                        <i class="fas fa-wallet fa-2x"></i>
                                      </div>
                                    </div>
                                    <div class="col-8">
                                      <div class="activity-text mb-0">
                                        Balance
                                        <p class="expenditure mb-0">
                                          Amount:
                                          <span class="expenditure-amt"
                                            ><small class="expenditure-sign"
                                              >$</small
                                            >1,800</span
                                          >
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </div>
        </div>
        <!-- End of Main Content -->